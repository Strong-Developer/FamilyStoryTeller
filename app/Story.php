<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'id', 'question_ID', 'Transcript', 'Record', 'Order'
    ];
}
