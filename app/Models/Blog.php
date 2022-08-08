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


    public function blogDetails(){
        return $this->hasMany(BlogDetail::class,'blog_id');
    }

    public function blogComponents(){
        return $this->hasMany(BlogComponent::class,'blog_id');
    }
}
