<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceStep extends Model
{
    use HasTranslations;
    use HasFactory;
    public $translatable=[
        'title','description',
    ];
    protected $fillable=[
        'title','description','image'
    ];
}

