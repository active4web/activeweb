<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{   
    use HasTranslations;
    use HasFactory;
    public $translatable=[
        'title','description'
    ];
    protected $fillable=[
        'title','description','image'
    ];

    public function serviceDetails(){
        return $this->hasMany(ServiceDetail::class,'service_id');
    }
}
