<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class serviceController extends Controller
{

    public function service()
    {
        $services=Service::all();
        return view('website.service.service',compact('services'));
    }
    public function show($id)
    {
        $services=Service::all();
        $service=Service::findOrFail($id);
        return view('website.service.show',compact('service','services'));
    }



}
