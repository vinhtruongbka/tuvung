<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "address";
    protected $fillable = [
        'id','content', 'images','created_at', 'updated_at','rech'
    ];
}
