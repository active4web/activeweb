<?php

namespace App\Http\Controllers\Admin;

use services;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    use ImageTrait;
    protected $serviceModel;
 
    public function __construct(Service $serviceModel)
    {
      $this->serviceModel=$serviceModel;
    }
}
