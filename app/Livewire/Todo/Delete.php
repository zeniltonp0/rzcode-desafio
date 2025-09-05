<?php

namespace App\Livewire\Todo;

use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Delete extends Component
{
    use Interactions;

    public bool $modal = false;

    public ?Task $task = null;

    #[On('todo::delete')]
    public function open(int $id): void
    {
        $this->task = Task::findOrFail($id);
        $this->modal = true;
    }

    public function delete(): void
    {
        if (! $this->task) {
            return;
        }

        $this->task->forceDelete();

        $this->toast()->success('Tarefa apagada!')->send();
        $this->dispatch('task::deleted');
        $this->modal = false;

    }

    public function render()
    {
        return view('livewire.todo.delete');
    }
}
