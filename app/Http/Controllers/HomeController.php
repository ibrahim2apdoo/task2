<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $contact;
    private $setting;

    public function __construct(Contact $contact, Setting $setting)
    {
        $this->contact = $contact;
        $this->setting = $setting;
    }





    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('website.index',compact('blogs'));
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
        $services=Service::all();
        return view('website.service.service',compact('services'));
    }
    public function show($id)
    {
        $service=Service::findOrFail($id);
        return view('website.service.show',compact('service'));
    }

    public function contact()
    {
        $contacts = $this->setting->first()->contact()->get();


        return view('website.Contact.contact',compact('contacts'));
    }

}
