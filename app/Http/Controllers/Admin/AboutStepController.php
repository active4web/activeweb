<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutStep;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\AboutSteps\CreateAboutStepRequest;
use App\Http\Requests\Admin\AboutSteps\UpdateAboutStepRequest;

class AboutStepController extends Controller
{

    protected $aboutStepModelModel;

    public function __construct(AboutStep $aboutstep)
    {
        $this->aboutStepModel = $aboutstep;
    }

    public function index()
    {
        $aboutsteps = $this->aboutStepModel::get();
        return view('Admin.aboutsteps.index', compact('aboutsteps'));
    }

    public function create()
    {

        return view('Admin.aboutsteps.create');
    }

    public function store(CreateAboutStepRequest $request)
    {

        $aboutstep = $this->aboutStepModel::create([
            'title'         => ['en' => $request->title_en, 'ar' => $request->title_ar,],
            'description'   => ['en' => $request->description_en, 'ar' => $request->description_ar,],
          
        ]);
        Alert::success('success', 'about step  added  Successfully');
        return redirect(route('Admin.aboutstep.index'));
    }

    public function update(UpdateAboutStepRequest  $request, $id)
    {

        $aboutstep = $this->aboutStepModel::findorfail($id);


        $aboutstep->update([
            'title'         => ['en' => $request->title_en, 'ar' => $request->title_ar,],
            'description'   => ['en' => $request->description_en, 'ar' => $request->description_ar,],
           

        ]);

        Alert::success('success', 'about step updated  Successfully');
        return redirect(route('Admin.aboutstep.index'));
    }

    public function destroy($id)
    {

        $aboutstep = $this->aboutStepModel::find($id);
        if ($aboutstep) {

            $aboutstep->delete();
        }
        Alert::success('success', 'about step deleted  Successfully');
        return redirect(route('Admin.aboutstep.index'));
    }
}
