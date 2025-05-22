<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Book extends Model
{
    //

    protected $fillable = ['type','description','book_price','book_name','auther_id'];

    public function auther():BelongsTo {
        return $this->belongsTo(Auther::class);
    }

    public function users():BelongsToMany {
        return $this->belongsToMany(User::class)->withPivot('comment')->withTimestamps();
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
