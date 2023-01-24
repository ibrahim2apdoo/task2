<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserContactRequest;
use App\Models\Contact;
use App\Models\UserContact;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class ContactController extends Controller
{

    public function index()
    {
        $contacts=Contact::all();
        return view('website.Contact.contact',compact('contacts'));
    }
    public function contact()
    {
        return view('website.Contact.index');
    }
    public function store(UserContactRequest $request)
    {
        try {
            UserContact::create($request->all());
            return redirect()->back()->with(['success'=>trans('massage.success')]);
        }catch (Exception $exception){
            return redirect()->back()->withErrors(['error'=>trans('massage.error')]);
        }

    }

}
