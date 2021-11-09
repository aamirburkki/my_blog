<?php

namespace App\Http\Controllers;

use App\Models\Blog;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 5cb28c979634828028105e9f774cc081bdbea5bb
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $blogs = Blog::all();
=======
        if(in_array('admin',Auth::user()->getRoleNames()->toArray()))
        {
            $blogs = Blog::all(); 
        }
        else
        {
            $blogs = Blog::all()->where('user_id', Auth::user()->id);
        }
>>>>>>> 5cb28c979634828028105e9f774cc081bdbea5bb
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        return view('blog.create');
>>>>>>> 5cb28c979634828028105e9f774cc081bdbea5bb
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->author = $request->author;
        if($request->hasfile('img')) {
            $img = $request->file('img')->getClientOriginalName();
            $request->img->move(public_path('assets/images'), $img);
        }
        $blog->img = $img;
        $blog->user_id = Auth::user()->id;
        $blog->description = $request->description;
        $blog->save();
        return back()->with('success','Blog Added Successfully.');
>>>>>>> 5cb28c979634828028105e9f774cc081bdbea5bb
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
<<<<<<< HEAD
        //
=======
        $blog->delete();
        return back();
>>>>>>> 5cb28c979634828028105e9f774cc081bdbea5bb
    }
}
