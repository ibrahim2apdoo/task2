<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $blogs=Blog::all();
        return view('website.index',compact('blogs'));
    }
    public function about()
    {
        return view('website.About.about');
    }



}
