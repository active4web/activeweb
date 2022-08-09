<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceDetail extends Model
{
    use HasTranslations;
    use HasFactory;
    public $translatable=[
        'title','description'
    ];
    protected $fillable=[
        'title','description','image','service_id'
    ];

    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
}

