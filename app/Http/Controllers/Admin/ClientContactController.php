<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ClientContact;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ClientContactController extends Controller
{ 
    
    protected $clientContactModel;

    public function __construct(ClientContact $clientcontactModel)
    {
        $this->clientContactModel = $clientcontactModel;
    }

    public function index()
    {
        $contacts = $this->clientContactModel::where('status', 0)->get();
        return view('Admin.clientcontacts.index', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = $this->clientContactModel::findorfail($id);
            $contact->update([
                'status'=> 1
            ]);
        Alert::success('success', 'contact deleted  Successfully');
        return redirect()->back();
    }
}
