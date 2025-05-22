<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Auther extends Model
{
    //

    protected $fillable = ['auther_name'];

    public function books():HasMany {
        return $this->hasMany(Book::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
