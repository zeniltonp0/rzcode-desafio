<?php

namespace App\Livewire\Todo;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Show extends Component
{
    #[Computed]
    public function tasks()
    {
        return auth()->user()->tasks;
    }

    public function render()
    {
        return view('livewire.todo.show');
    }
}
