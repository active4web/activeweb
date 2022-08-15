<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientComment extends Model
{
    use HasFactory;
    protected $fillable =[
        'comment','reply','service_request_id','status'   ];



        public function serviceRequest(){
            return $this->belongsTo(ServiceRequest::class,'service_request_id')->with('users','services');
        }
}
