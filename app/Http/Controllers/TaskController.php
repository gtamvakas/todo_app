<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    //

    public function store(){


        Task::create($this->validateTask());

        return back();
    }

    public function validateTask(?Task $task = null): array
    {
        $task ??= new Task();
        return request()->validate([
            'project_id'=>['required', 'integer'],
            'name' => ['required','max:255']

        ]);
    }
}
