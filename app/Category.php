<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps = true;
    protected $fillable = ['category'];

    public function News() {
		return $this->hasMany('App\News', 'category_id');
	}
}
