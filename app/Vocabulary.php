<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = "vocabulary";
    protected $fillable = [
        'id', 'idCategorychi','audio','images','vietnamtrue','koreantrue','status','created_at', 'updated_at'
    ];
}
