<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($locale , $id)
    {
        $service = Service::find($id);
        $titles = explode(',' , $service->title);
        $descriptions = explode(',' , $service->description);
        $images = explode(',' , $service->image);
        $details = [];
        foreach ($titles as $key => $title)
        {
            $details[$key]['title'] = $title;
            if (isset($descriptions[$key]))
            {
                $details[$key]['description'] = $descriptions[$key];
            }
            if (isset($images[$key]))
            {
                $details[$key]['image'] = $images[$key];
            }
        }


        return view('services' , [
            'details' => $details ,
            'title' => 'خدمات'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'description' => 'required' ,
            'image' => 'required' ,
        ]);

      //  dd($request->all());
        if ($request->hasFile('image'))
        {
            foreach ($request->file('image') as $key => $item)
            {
                $name = time().'_'.$item->getClientOriginalName();
                $item->move(public_path('/images/services'), $name);
                $names[] = $name;
            }
            Service::create([
                'title' => implode(',' , $request->title),
                'description' => implode(',' , $request->description) ,
                'image' => implode(',' , $names) ,
            ]);
            return back()->with('message', 'سرویس ایجاد شد');
        }

        return 'something went wrong';
    }

    public function create()
    {
        return view('admin_panel.create-srv');
    }

    public function show()
    {
        $services = Service::latest('id')->get();

        foreach ($services as $service)
        {
            $titles = explode(',' , $service->title);
            $descriptions = explode(',' , $service->description);
            $images = explode(',' , $service->image);
            $service['title'] = $titles[0];
            $service['description'] = $descriptions[0];
            $service['image'] = $images[0];
        }
        return view('admin_panel.services' , [
            'services' => $services
        ]);
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $titles = explode(',' , $service->title);
        $descriptions = explode(',' , $service->description);
        $images = explode(',' , $service->image);
        $details = [];
        foreach ($titles as $key => $title)
        {
            $details[$key]['title'] = $title;
            if (isset($descriptions[$key]))
            {
                $details[$key]['description'] = $descriptions[$key];
            }
            if (isset($images[$key]))
            {
                $details[$key]['image'] = $images[$key];
            }
        }

        return view('admin_panel.edit-service' , [
            'service' => $details ,
            'id' => $service->id
        ]);
    }

    public function update($id , Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'description' => 'required' ,
            'image' => 'required' ,
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('image'))
        {
            foreach ($request->file('image') as $key => $item)
            {
                $name = time().'_'.$item->getClientOriginalName();
                $item->move(public_path('/images/services'), $name);
                $names[] = $name;
            }
            $service->update([
                'title' => implode(',' , $request->title),
                'description' => implode(',' , $request->description) ,
                'image' => implode(',' , $names) ,
            ]);
            return back()->with('message', 'تغییرات اعمال شد');
        }
        else
        {
            $service->update([
                'title' => implode(',' , $request->title),
                'description' => implode(',' , $request->description) ,
            ]);
            return back()->with('message', 'تغییرات اعمال شد');
        }
    }

    public function test()
    {
        $services = Service::latest('id')->take(5)->get();
        $services1 = Service::latest('id')->take(5)->get();

        foreach ($services as $service)
        {
            $titles = explode(',' , $service->title);
            $descriptions = explode(',' , $service->description);
            $images = explode(',' , $service->image);
            $service['title'] = $titles[0];
            $service['description'] = $descriptions[0];
            $service['image'] = $images[0];
        }

        return [$services , $services1];
    }
}
