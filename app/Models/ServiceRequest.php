<?php

namespace App\Models;

use App\Models\User;
use App\Models\Service;
use App\Models\ClientComment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','user_id' , 'service_id'
    ];


    public function services(){
       return $this->belongsTo(Service::class,'service_id');
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function clientComments(){
        return $this->hasMany(ClientComment::class,'service_request_id','id');
    }
}
