<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    protected $table = "sidebar";
    protected $fillable = [
        'id', 'title','created_at', 'updated_at','slug','status'
    ];
}
