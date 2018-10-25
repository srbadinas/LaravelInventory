<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';

    public function products()
    {
    	return $this->hasMany('App\Product');
    }

    public function user_created()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function user_updated()
    {
    	return $this->belongsTo('App\User', 'updated_by', 'id');
    }
}
