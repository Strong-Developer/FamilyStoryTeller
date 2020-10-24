<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'id', 'category_id', 'storyteller_name', 'collaborator_name', 'content', 'proceed', 'created_at', 'updated_at'
    ];
}
