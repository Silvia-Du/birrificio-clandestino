<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable =[
        'name',
        'company',
        'type',
        'alcohol_content',
        'description',
        'image',
        'hops',
        'gluteen_free',
    ];
}
