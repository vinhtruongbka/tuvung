<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorychi extends Model
{
    protected $table = "categorychi";
    protected $fillable = [
        'id','idCategory', 'Title','Slug','status','created_at', 'updated_at'
    ];
}
