<?php

namespace App\Livewire\Todo;

use App\Models\Task;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[On('task::created')]
#[On('task::updated')]
#[On('task::deleted')]
#[On('task::archived')]
class Show extends Component
{
    use WithPagination;

    public ?Task $task = null;

    #[Computed]
    public function tasks()
    {
        return auth()->user()->tasks()->orderBy('created_at', 'desc')->paginate(5);
    }

    public function render()
    {
        return view('livewire.todo.show');
    }
}
