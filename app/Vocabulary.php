<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = "vocabulary";
    protected $fillable = [
        'id', 'idCategorychi','korean','vietnamese','audio','images','status','created_at', 'updated_at'
    ];
}
