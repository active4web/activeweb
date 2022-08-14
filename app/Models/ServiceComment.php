<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceComment extends Model
{
    use HasFactory;

    protected $fillable =[
        'site_url','comment','file','service_id'
    ];

    public function services(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
