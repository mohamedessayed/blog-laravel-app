<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    //

    protected $fillable = ['type','description','book_price','book_name','auther_id'];

    public function auther():BelongsTo {
        return $this->belongsTo(Auther::class);
    }
}
