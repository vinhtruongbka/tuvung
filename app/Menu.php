<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = [
        'id','Title','slug','status','created_at', 'updated_at'
    ];
}
