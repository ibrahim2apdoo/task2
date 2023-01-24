<?php

use App\Models\Fact;
use App\Models\Permission;

const PAGINATION_COUNT = 15;

function successResponse( $msg, $data = [])
{
    return response()->json(['status' => 200, 'msg' => $msg, 'data' => $data], 200);
}

function failureResponse( $msg, $data = [])
{
    return response()->json(['status' => 400, 'msg' => $msg, 'data' => $data], 400);
}


function createdAtFormat($model)
{
    return date('d/m/Y - h:i A', strtotime($model));
}

function updatedAtFormat($model)
{
    return date('d/m/Y - h:i A', strtotime($model));
}

function permissionName()
{
    $permissions = Permission::all();
    $data = [];
    foreach ($permissions as $permission) {
        $data [] = $permission->name;
    }
    return implode('|', $data);
}

function settings(){
    $setting = \App\Models\Setting::first();
    if ($setting)
        return $setting;
    return '';
}












function phone(){
    $phone=\App\Models\Contact::where('type','phone')->first();

    if ($phone)
        return $phone->contact;
    return '';
}

function email(){
    $email=\App\Models\Contact::where('type','email')->first();

    if ($email)
        return $email->contact;
    return '';
}

function social(){
    $social=\App\Models\Contact::where('type','social')->get();

    if ($social)
        return $social;
    return '';
}

function Projects(){
    $Projects=\App\Models\Project::take(6)->get();
    if ($Projects)
        return $Projects;
    return '';
}
function about(){
    $about=\App\Models\Page::take(6)->get();
    if ($about)
        return $about;
    return '';
}

function Vision(){
    $vision=\App\Models\Page::where('identifier','Vision')->get();
    if ($vision)
        return $vision;
    return '';
}

function Mission(){
    $mission=\App\Models\Page::where('identifier','Mission')->get();
    if ($mission)
        return $mission;
    return '';
}
function Company(){
    $company=\App\Models\Page::where('identifier','About our Company')->get();
    if ($company)
        return $company;
    return '';
}

function Latest_Project(){
    $Latest_Project=\App\Models\Page::where('identifier','Latest Project')->get();
    if ($Latest_Project)
        return $Latest_Project;
    return '';
}


function Partners(){
    $partner=\App\Models\Page::where('identifier','Partners')->get();
    if ($partner)
        return $partner;
    return '';
}
function Clients(){
    $client=\App\Models\Page::where('identifier','Clients')->get();
    if ($client)
        return $client;
    return '';
}


function Solution_We_Offer(){
    $Solution_We_Offer=\App\Models\Page::where('identifier','Solution We Offer')->get();
    if ($Solution_We_Offer)
        return $Solution_We_Offer;
    return '';
}
function OurProcess(){
    $process=\App\Models\Page::where('identifier','Process')->get();
    if ($process)
        return $process;
    return '';
}

function banner(){
    $banner=\App\Models\Slider::take(1)->get();
    if ($banner)
        return $banner;
    return '';
}
function Project(){
    $project=\App\Models\Project::get();
    if ($project)
        return $project;
    return '';
}
function facts(){
    $facts=Fact::take(4)->get();
    if ($facts)
        return $facts;
    return '';
}


function mapLink(){
    $map=\App\Models\Page::where('identifier','map')->first();
    if ($map)
        return $map->link;
    return '';
}

