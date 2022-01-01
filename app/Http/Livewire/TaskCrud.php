<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskCrud extends Component
{
    public Task $task;

    public function render()
    {
        return view('livewire.task-crud');
    }

    public function delete(){
        $this->task->name = '';
        $this->task->delete();
    }

    public function completed(){
        $this->task->update(['done' => true]);
    }
}
