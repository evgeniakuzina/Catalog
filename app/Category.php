<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = [
        'name',
    ];

    public function goods() {
        return $this->belongsToMany('App\Good');
    }

    public $timestamps = false;

}
