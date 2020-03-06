<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name','category_id'];

    public function category(){
        // subcategory belongs to  category
        return $this->belongsTo(Category::class);
    }

    public function hardwares(){
        //subcategory has many hardwares
        return $this->hasMany(HardWare::class);
    }
}
