<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
  
    protected $contactModel;

    public function __construct(Contact $contactModel)
    {
        $this->contactModel = $contactModel;
    }

    public function index()
    {
        $contacts = $this->contactModel::where('status', 0)->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = $this->contactModel::findorfail($id);
            $contact->update([
                'status'=> 1
            ]);
        Alert::success('success', 'contact deleted  Successfully');
        return redirect(route('Admin.contact.index'));
    }
}
