<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceRequestController extends Controller
{
    
    protected $serviceRequestModel;

    public function __construct(ServiceRequest $serviceRequest)
    {
        $this->serviceRequestModel = $serviceRequest;
    }

    public function index()
    {
        $servicerequests = $this->serviceRequestModel::with('services','users')->get();
        return view('Admin.servicerequests.index', compact('servicerequests'));
    }

    public function destroy($id)
    {
        $servicerequest = $this->serviceRequestModel::findorfail($id);
        if($servicerequest){
            $servicerequest->delete();
        }
            
        Alert::success('success', 'servicerequests deleted  Successfully');
        return redirect(route('Admin.servicerequests.index'));
    }
}
