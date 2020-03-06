<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function subcategories(){
        //one category has many subcategories
        return $this->hasMany(SubCategory::class);
    }
}
