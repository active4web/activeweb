<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ClientComment;
use App\Models\ClientContact;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ClientCommentController extends Controller
{
   
    protected $clientCommentModel;

    public function __construct(ClientComment $clientcommentModel)
    {
        $this->clientCommentModel = $clientcommentModel;
    }

    public function index()
    {
        $comments = $this->clientCommentModel::get();
        return view('Admin.clientcomments.index', compact('comments'));
    }

    public function reply($id,Request $request)
    {
        $comment = $this->clientCommentModel::findorfail($id);
            $comment->update([
                'reply'=> $request->reply,
                'status'=> 1
            ]);
        Alert::success('success', ' replayed on comment  Successfully');
        return redirect()->back();
    }
}
