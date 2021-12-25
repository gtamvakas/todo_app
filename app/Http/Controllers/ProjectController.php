<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

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
        $this->authorize('owner',[$project]);
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create(){
        return view('projects.create');
    }

    public function store(){

        Project::create(array_merge($this->validateProject(),[
            'user_id' => request()->user()->id,
            'slug' => Str::slug(request()->input('name'))
        ]));

        return redirect('/projects');
    }

    public function validateProject(): array
    {
        return request()->validate([
            'name' => ['required','max:255']
        ]);
    }
}
