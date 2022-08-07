<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{ 
    use HasTranslations;
    use HasFactory;
    public $translatable=[
        'title','description','category'
    ];
    protected $fillable=[
        'title','description','image', 'category','created_by'
    ];
}
