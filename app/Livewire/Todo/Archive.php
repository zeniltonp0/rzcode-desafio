<?php

namespace App\Livewire\Todo;

use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Archive extends Component
{
    use Interactions;

    public bool $modal = false;

    public ?Task $task = null;

    #[On('todo::archive')]
    public function open(int $id): void
    {
        $this->task = Task::findOrFail($id);
        $this->modal = true;
    }

    public function archive(): void
    {
        if (! $this->task) {
            return;
        }
        $this->task->completed = true;
        $this->task->save();

        $this->toast()->success('Tarefa concluída!')->send();
        $this->dispatch('task::archived');
        $this->modal = false;
    }

    public function render()
    {
        return view('livewire.todo.archive');
    }
}
