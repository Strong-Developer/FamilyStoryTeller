<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $fillable = [
        'id', 'type', 'first_name', 'last_name', 'phone', 'email', 'created_at', 'updated_at'
    ];
}
