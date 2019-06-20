<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = true;
    protected $fillable = ['author', 'title', 'description', 'image', 'content', 'status'];

    public function Category()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }
}
