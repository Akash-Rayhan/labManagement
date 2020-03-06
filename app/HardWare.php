<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HardWare extends Model
{

    protected $fillable = ['name','subcategory_id','quantity'];

    public function subcategory(){
        //Hardwares belong to SubCategory
        return $this->belongsTo(SubCategory::class);
    }
}
