<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutGoal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\AboutGoals\CreateAboutGoalRequest;
use App\Http\Requests\Admin\AboutGoals\UpdateAboutGoalRequest;

class AboutGoalController extends Controller
{
    
    protected $aboutGoalModelModel;

    public function __construct(AboutGoal $aboutGoal)
    {
        $this->aboutGoalModel = $aboutGoal;
    }

    public function index()
    {
        $aboutgoals = $this->aboutGoalModel::get();
        return view('Admin.aboutgoals.index', compact('aboutgoals'));
    }

    public function create()
    {

        return view('Admin.aboutgoals.create');
    }

    public function store(CreateAboutGoalRequest $request)
    {

        $aboutgoal = $this->aboutGoalModel::create([
            'title'         => ['en' => $request->title_en, 'ar' => $request->title_ar,],
            'description'   => ['en' => $request->description_en, 'ar' => $request->description_ar,],
          
        ]);
        Alert::success('success', 'aboutgoal  added  Successfully');
        return redirect(route('Admin.aboutgoal.index'));
    }

    public function update(UpdateAboutGoalRequest  $request, $id)
    {

        $aboutgoal = $this->aboutGoalModel::findorfail($id);


        $aboutgoal->update([
            'title'         => ['en' => $request->title_en, 'ar' => $request->title_ar,],
            'description'   => ['en' => $request->description_en, 'ar' => $request->description_ar,],
           

        ]);

        Alert::success('success', 'about goal   updated  Successfully');
        return redirect(route('Admin.aboutgoal.index'));
    }

    public function destroy($id)
    {

        $aboutGoal = $this->aboutGoalModel::find($id);
        if ($aboutGoal) {

            $aboutGoal->delete();
        }
        Alert::success('success', 'about goal deleted  Successfully');
        return redirect(route('Admin.aboutgoal.index'));
    }
}
