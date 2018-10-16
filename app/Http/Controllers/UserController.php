<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'asc')->paginate(5);


        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|max:255|unique:users|email',
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'contact_number' => 'required|numeric|digits:10',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make('sa12345');
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->contact_number = $request->contact_number;
        $user->is_admin = '0';
        $user->is_active = '1';
        $user->save();

        Session::flash('success', 'User has been created.');
        return view('users.show')->with('user', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if ($user)
        {
            return view('users.show')->with('user', $user);
        }
        else 
        {
            return redirect()->route('users.index')->withErrors('User not found.');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        if ($user)
        {
            return view('users.edit')->with('user', $user);
        }
        else 
        {
            return redirect()->route('users.index')->withErrors('User not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required|max:255|unique:users,username,'.$id,
            'email' => 'required|max:255|email',
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'contact_number' => 'required|numeric|digits:10',
        ]);

        $user = User::find($id);
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->lastname = $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->contact_number = $request->input('contact_number');
        $user->save();

        Session::flash('success', 'This user was successfully saved.');

        return redirect()->route('users.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user->is_admin)
        {
            return redirect()->route('users.show', $user->id)->withErrors('Unable to delete administrator account.');
        }

        $user->delete();

        Session::flash('success', 'User was successfully deleted.');
        return redirect()->route('users.index');
    }

    public function search($search_by, $search)
    {
        //$users = User::where('id', '3');
        $users = User::where($search_by, '=', $search)->take(10)->get();
        return view('users.index')->with('users', $users);
    }

}