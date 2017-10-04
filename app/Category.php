<?php

namespace App;



class Category extends Model
{
    protected $table= 'categories';
	public function posts()
	{
		return $this->hasMany('App\Post');
	}
}
