<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $fillable = [
        'id', 'Title', 'Slug', 'Summary', 'Content', 'Image', 'Status', 'Views', 'IdCategory', 'created_at', 'updated_at'
    ];
}
