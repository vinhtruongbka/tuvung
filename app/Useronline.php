<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Useronline extends Model
{
     protected $table = "useronline";
    protected $fillable = [
        'id', 'ip', 'tgtmp','created_at', 'updated_at'
    ];
}
