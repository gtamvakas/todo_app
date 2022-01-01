<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class DeleteTask extends Component
{
    public Task $task;
    public string $name;

    public function mount(){
        $this->name = $this->task->name;
    }
    public function render()
    {

        return view('livewire.delete-task');
    }

    public function delete(){

        $this->name = '';
        $this->task->delete();
    }
}
