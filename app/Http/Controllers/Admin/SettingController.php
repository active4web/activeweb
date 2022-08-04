<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\UpdateRequest;
use App\Models\SocialMedia;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    use ImageTrait;
    protected $settingModel;
    protected $socialmediaModel;
    public function __construct(Setting $setting, SocialMedia $social)
    {
        $this->settingModel = $setting;
        $this->socialmediaModel=$social;
    }


    public function edit()
    {
        $setting = $this->settingModel::first();
        $socials= $this->socialmediaModel::get();
        return view('admin.setting.edit', compact('setting','socials'));
    }

    public function update(UpdateRequest $request)
    {

      
        $setting = $this->settingModel::first();
        if ($request->hasFile('logo')) {
            $filename = time() . '.' . $request->logo->extension();
            $logoname =  $this->uploadImage($request->logo, $filename, 'setting');
            unlink(public_path('images/setting/'.$setting->logo));
        }

      
        $setting->update([
            'app_name' => ['en' => $request->name_en, 'ar' => $request->name_ar],
            'description' => ['en' => $request->description_en, 'ar' => $request->description_ar],
            'logo' => $logoname ?? $setting->logo,
            'email' => $request->email,
            'address' => ['en' => $request->address_en, 'ar' => $request->address_ar],
            'phone'   => $request->phone
        ]);
      
           
        Alert::success('success', 'Setting updated Successfully');
        return redirect()->back();
    }
}
