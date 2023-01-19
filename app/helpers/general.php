<?php

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

function Projects(){
    $Projects=\App\Models\Project::take(6)->get();
    if ($Projects)
        return $Projects;
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
function Quality(){
    $quality=\App\Models\Page::where('identifier','Quality')->get();
    if ($quality)
        return $quality;
    return '';
}
function Partners(){
    $partners=\App\Models\Page::where('identifier','Partners')->get();
    if ($partners)
        return $partners;
    return '';
}
function Company(){
    $company=\App\Models\Page::where('identifier','About our Company')->get();
    if ($company)
        return $company;
    return '';
}
