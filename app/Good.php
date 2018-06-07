<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //

    protected $fillable = [
        'name',
    ];

    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    public $timestamps = false;
}
