<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 100)->unique();
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('lastname', 100);
            $table->string('firstname', 100);
            $table->string('contact_number', 12);
            $table->boolean('is_admin');
            $table->boolean('is_active')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User;
        $user->username = 'sa';
        $user->email = 'srbadinas@gmail.com';
        $user->password = Hash::make('sa12345');
        $user->lastname = 'Badinas';
        $user->firstname = 'Sebastian Renz';
        $user->contact_number = '639295743501';
        $user->is_admin = '1';
        $user->is_active = '1';
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
