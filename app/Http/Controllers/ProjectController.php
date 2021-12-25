<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        return view('projects.index', [
            'projects'=> Project::latest()
                ->where('user_id', auth()->id())
                ->paginate(10)
        ]);
    }

    public function show(Project $project){

        return view('projects.show', [
            'project' => $project
        ]);
    }
}
