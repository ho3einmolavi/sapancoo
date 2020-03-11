<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class NewsController extends Controller
{
    public function single($locale , $id)
    {

        $news = News::find($id);

        $news['date'] = Jalalian::forge($news->updated_at)->format('%A, %d %B %y');
        $news['time'] = Jalalian::forge($news->updated_at)->format('H:m');
        // $blog['user'] = $blog->user;

        return view('single-news' , [
            'news' => $news ,
            'title' => 'اخبار' ,
            'keywords' => $news->keywords
        ]);
    }

    public function show()
    {
        $blogs = News::latest('id')->get();

        $myArray = json_decode(json_encode($blogs), true);
        $myArray = array_chunk($myArray , count($blogs)/2);

        return view('news' , [
            'news' => $myArray ,
            'title' => 'اخبار'
        ]);
    }

    public function index()
    {
        $news = News::latest('id')->get();

        foreach ($news as $new)
        {
            $new['date'] = Jalalian::forge($new->updated_at)->format('%A, %d %B %y');
        }

        return view('admin_panel.news' , [
            'news' => $news
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required' ,
            'image' => 'required' ,
            'keywords' => 'required' ,
        ]);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/news'), $name);
            News::create([
                'title' => $request->title,
                'body' => $request->body ,
                'keywords' => $request->keywords ,
                'image' => $name ,
                //'user_id' => auth()->user()->id ,
            ]);
            return back()->with('message', 'خبر ایجاد شد');
        }
    }

    public function create()
    {
        return view('admin_panel.create-news');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin_panel.edit-news' , [
            'new' => $news
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
        $news = News::findOrFail($id);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/news'), $name);
            $news->update([
                'title' => $request->title,
                'body' => $request->body ,
                'keywords' => $request->keywords ,
                'image' => $name ,
               // 'user_id' => auth()->user()->id
            ]);
            return redirect()->back()->with('message', 'news updated');
        }
    }
}
