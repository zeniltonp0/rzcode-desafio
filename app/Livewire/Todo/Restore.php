<?php

namespace App\Livewire\Todo;

use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Restore extends Component
{
    use Interactions;

    public bool $modal = false;

    public ?Task $task = null;

    #[On('todo::restore')]
    public function open(int $id): void
    {
        $this->task = Task::findOrFail($id);
        $this->modal = true;
    }

    public function restore(): void
    {
        if (! $this->task) {
            return;
        }
        $this->task->completed = false;
        $this->task->save();

        $this->toast()->success('Tarefa restaurada!')->send();
        $this->dispatch('task::restored');
        $this->modal = false;
    }

    public function render()
    {
        return view('livewire.todo.restore');
    }
}
