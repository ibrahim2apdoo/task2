<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartenerController extends Controller
{

    public function index()
    {
        $partners=Partner::all();
        return view('website.Partner.index',compact('partners'));

    }
}
