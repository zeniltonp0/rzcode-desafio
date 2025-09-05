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
#[On('task::restored')]
class Show extends Component
{
    use WithPagination;

    public string $filter = 'ativas';

    public ?Task $task = null;

    public function toggleFilter(): void
    {
        $this->filter = $this->filter === 'ativas' ? 'concluidas' : 'ativas';
        $this->resetPage();
    }

    #[Computed]
    public function tasks()
    {
        $query = auth()->user()->tasks()->orderBy('created_at', 'desc');

        if ($this->filter === 'ativas') {
            $query->where('completed', false);
        } else {
            $query->where('completed', true);
        }

        return $query->paginate(5);
    }

    #[Computed]
    public function activeTasks()
    {
        return auth()->user()->tasks()->orderBy('created_at', 'desc')->where('completed', '=', false)->get();
    }

    public function render()
    {
        return view('livewire.todo.show');
    }
}
