<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TechnicalSupport;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TechnicalSupportController extends Controller
{
    
    protected $technicalSupportModel;

    public function __construct(TechnicalSupport $technicalsupport)
    {
        $this->technicalSupportModel = $technicalsupport;
    }

    public function index()
    {
        $technicalsupports = $this->technicalSupportModel::get();
        return view('admin.technicalsupports.index', compact('technicalsupports'));
    }

    public function destroy($id)
    {
        $technicalsupport = $this->technicalSupportModel::findorfail($id);
        if($technicalsupport){
            $technicalsupport->delete();
        }
            
        Alert::success('success', 'technicalsupport deleted  Successfully');
        return redirect(route('Admin.technicalsupport.index'));
    }
}
