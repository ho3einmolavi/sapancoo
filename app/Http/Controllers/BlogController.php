<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class BlogController extends Controller
{
    public function single($locale ,$id)
    {
        $blog = Blog::find($id);

        $blog['date'] = Jalalian::forge($blog->updated_at)->format('%A, %d %B %y');
        $blog['time'] = Jalalian::forge($blog->updated_at)->format('H:m');
       // $blog['user'] = $blog->user;

        return view('single-blog' , [
            'blog' => $blog ,
            'title' => 'وبلاگ' ,
            'keywords' => $blog->keywords
        ]);
    }


    public function show()
    {
        $blogs = Blog::latest('id')->get();

        $myArray = json_decode(json_encode($blogs), true);
        $myArray = array_chunk($myArray , count($blogs)/2);

        return view('blogs' , [
            'blogs' => $myArray ,
            'title' => 'وبلاگ'
        ]);
    }

    public function index()
    {
        $blogs = Blog::latest('id')->get();

        return view('admin_panel.blogs' , [
            'blogs' => $blogs
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required' ,
            'keywords' => 'required' ,
            'image' => 'required|image' ,
        ]);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/blogs'), $name);
            Blog::create([
                'title' => $request->title,
                'body' => $request->body ,
                'keywords' => $request->keywords ,
                'image' => $name ,
               // 'user_id' => auth()->user()->id
            ]);
            return back()->with('message', 'مقاله ایجاد شد');
        }
    }

    public function create()
    {
        return view('admin_panel.create-blog');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin_panel.edit-blog' , [
            'blog' => $blog
        ]);
    }

    public function update($id , Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required' ,
            'image' => 'required' ,
            'keywords' => 'required' ,
        ]);
        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/blogs'), $name);
            $blog->update([
                'title' => $request->title,
                'body' => $request->body ,
                'keywords' => $request->keywords ,
                'image' => $name ,
                //'user_id' => auth()->user()->id
            ]);
            return redirect()->back()->with('message', 'blog updated');
        }
    }
}
