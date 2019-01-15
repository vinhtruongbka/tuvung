<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    protected $table = "sidebar";
    protected $fillable = [
        'id', 'Title','created_at', 'updated_at','slug','status'
    ];
}
