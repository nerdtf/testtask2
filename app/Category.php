<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $with = ['sub_categories'];


    public function sub_categories()
    {
        return $this->hasMany('App\SubCategory');
    }
}
