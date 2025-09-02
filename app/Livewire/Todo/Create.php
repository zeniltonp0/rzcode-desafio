<?php

namespace App\Livewire\Todo;

use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public bool $modal = false;

    public ?string $title = null;

    public ?string $description = null;

    public ?string $due_date = null;

    #[On('todo::create')]
    public function open()
    {
        $this->modal = true;
    }

    public function render()
    {
        return view('livewire.todo.create');
    }
}
