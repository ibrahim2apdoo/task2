<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

public function index(){
    $blogs=Blog::all();
    return view('website.blog.index',compact( 'blogs'));
}

    public function show($id)
    {
        $blogs=Blog::all();
        $blog=Blog::findOrFail($id);
        return view('website.blog.show',compact('blog','blogs'));
    }

}
