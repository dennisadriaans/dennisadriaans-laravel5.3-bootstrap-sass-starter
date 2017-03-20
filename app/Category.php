<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['title', 'group_name', 'type'];

    public function properties()
    {
        return $this->hasMany('App\CategoryProperty');
    }
}
