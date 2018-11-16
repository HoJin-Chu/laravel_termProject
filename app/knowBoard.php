<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class knowBoard extends Model
{
    protected $table = 'knowBoard';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'writer',
        'content'
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
}
