<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['app_name','description','address','service_desc','work_desc','blog_desc','footer_desc'];
    protected $fillable=['app_name','description','logo','email','address','phone','service_desc','work_desc','blog_desc','footer_desc'];
}
