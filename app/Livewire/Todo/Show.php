<?php

namespace App\Livewire\Todo;

use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    #[Computed]
    public function tasks()
    {
        return auth()->user()->tasks()->paginate(5);
    }

    public function render()
    {
        return view('livewire.todo.show');
    }
}
