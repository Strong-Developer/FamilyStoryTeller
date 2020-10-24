<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookdata extends Model
{
    protected $fillable = [
        'id', 'title', 'contributors', 'status'
    ];
}
