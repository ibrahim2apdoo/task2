<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Feature;
use App\Models\Process;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $blogs=Blog::all();
        $features = Feature::take(6)->get();
        $processesItem=Process::take(4)->get();
        return view('website.index',compact('blogs','features','processesItem'));
    }
    public function about()
    {
        return view('website.About.about');
    }




}
