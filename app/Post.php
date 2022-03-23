<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'slug', 'description', 'sub_category_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
     public function sub_category() {
        return $this->belongsTo('App\SubCategory');
    }

}
