<?php

namespace App\Livewire\Todo;

use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public bool $modal = false;

    #[Rule(['required', 'string', 'max:255'])]
    public ?string $title = null;

    #[Rule(['string'])]
    public ?string $description = null;

    #[Rule(['date'])]
    public ?string $due_date = null;

    #[On('todo::create')]
    public function open()
    {
        $this->modal = true;
    }

    public function save()
    {
        $this->validate();

        auth()->user()->tasks()->create([
            'title' => $this->title,
            'description' => $this->description,
            'due_date' => $this->due_date,
        ]);

        $this->modal = false;

        $this->dispatch('task::created');
    }

    public function render()
    {
        return view('livewire.todo.create');
    }
}
