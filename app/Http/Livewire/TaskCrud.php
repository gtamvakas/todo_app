<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\Task;
use Livewire\Component;

class TaskCrud extends Component
{
    public Task $task;
    public Project $project;

    public function render()
    {
        return view('livewire.task-crud');
    }

    public function delete(){
        $this->task->name = '';
        $this->task->delete();
    }

    public function done(){
        $this->task->update(['done' => true]);
    }
    public function undone(){
        $this->task->update(['done' => false]);
    }
}
