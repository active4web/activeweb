<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurWorkDetail extends Model
{
    use HasTranslations;
    use HasFactory;
    public $translatable=[
       'description'
    ];
    protected $fillable=[
        'description','ourwork_id'
    ];

    public function ourWork(){
        return $this->belongsTo(OurWork::class,'ourwork_id');
    }
}
