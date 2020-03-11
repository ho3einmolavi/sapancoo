<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function update(Request $request)
    {
        $setting = Setting::latest('id')->first();
        if ($request->hasFile('logo'))
        {
            $name = time().'_'.$request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('/images/logo'), $name);
            $setting->update([
                'title' => $request->title ,
                'description' => $request->description ,
                'keywords' => $request->keywords ,
                'aboutus' => $request->aboutus ,
                'support' => $request->support ,
                'office' => $request->office ,
                'main_office' => $request->main_office ,
                'manager' => $request->manager ,
                'address' => $request->address ,
                'email' => $request->email ,
                'logo' => $name,
            ]);
        }
        else
        {
            $setting->update([
                'title' => $request->title ,
                'description' => $request->description ,
                'keywords' => $request->keywords ,
                'aboutus' => $request->aboutus ,
                'support' => $request->support ,
                'office' => $request->office ,
                'main_office' => $request->main_office ,
                'manager' => $request->manager ,
                'address' => $request->address ,
                'email' => $request->email ,
            ]);
        }
        return back()->with('message' , 'تنظیمات اعمال شد');
    }

    public function edit()
    {
        $setting = Setting::latest('id')->first();

        if ($setting)
        {
            return view('admin_panel.setting' , [
                'setting' => $setting
            ]);
        }
        else
        {
            $setting = Setting::create([
                'title' => 'ساپانکو'
            ]);
            return view('admin_panel.setting' , [
                'setting' => $setting
            ]);
        }
    }
}
