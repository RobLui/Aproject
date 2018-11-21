<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'id', 'title', 'url', 'text', 'data', 'posted_by', 'allowed'
    ];
}
