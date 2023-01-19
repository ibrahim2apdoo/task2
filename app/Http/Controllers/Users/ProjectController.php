<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::all();
        return view('website.Projects.index',compact('projects'));

    }


    public function show($id)
    {
        $project=Project::findOrFail($id);
        $images = $project->files()->where('type', '!=', 'cover')->get();
        return view('website.Projects.show',compact('project','images'));
    }
}
