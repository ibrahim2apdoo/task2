<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\UserContact;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
    private $usercontact;

    public function __construct(UserContact $usercontact)
    {
        $this->middleware(['permission:read-userContact'])->only('index');
        $this->middleware(['permission:delete-userContact'])->only('destroy');
        $this->usercontact = $usercontact;
    }

    public function index()
    {
        try {
            $usercontacts = $this->usercontact->latest('id')->get();
            return view('admin.userContact.index', compact('usercontacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show($id)
    {
        //
    }

    public function destroy(UserContact $userContact)
    {

        try {
            $userContact->delete();
            return redirect()->route('userContact.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

}
