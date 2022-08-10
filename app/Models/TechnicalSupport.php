<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalSupport extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'category_id'
    ];


    public function category(){
       return $this->belongsTo(Category::class,'category_id');
    }
}
