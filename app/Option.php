<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
     protected $fillable = ['title', 'vote', 'poll_id'];

public function poll()
    {
        return $this->belongsTo(Poll::class);
    }


}
