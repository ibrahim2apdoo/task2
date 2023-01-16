<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.About.about');
    }
    public function team()
    {
        return view('website.Team.team');
    }
    public function service()
    {
        return view('website.service.service');
    }
    public function contact()
    {
        return view('website.Contact.contact');
    }
    public function blog()
    {
        return view('website.blog.blog');
    }
}
