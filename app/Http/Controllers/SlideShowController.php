<?php

namespace App\Http\Controllers;

use App\SlideShow;
use Illuminate\Http\Request;

class SlideShowController extends Controller
{
    public function create()
    {
        return view('admin_panel.create-slideShow');
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'image' => 'required|image' ,
        ]);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/slideShow'), $name);
            SlideShow::create([
                'image' => $name ,
                'title' => $request->title
            ]);
            return back()->with('message', 'اسلایدشو ایجاد شد');
        }
    }
}
