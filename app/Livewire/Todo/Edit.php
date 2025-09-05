<?php

namespace App\Livewire\Todo;

use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Edit extends Component
{
    use Interactions;

    public bool $modal = false;

    public ?Task $task = null;

    #[Rule(['required', 'string', 'max:255'])]
    public ?string $title = null;

    #[Rule(['string'])]
    public ?string $description = null;

    #[Rule(['date'])]
    public ?string $due_date = null;

    #[On('todo::edit')]
    public function open(int $id)
    {
        $this->task = Task::findOrFail($id);
        $this->title = $this->task->title;
        $this->description = $this->task->description;
        $this->due_date = $this->task->due_date;
        $this->modal = true;
    }

    public function save(): void
    {
        if (! $this->task) {
            return;
        }
        $this->validate();

        $this->task->update([
            'title' => $this->title,
            'description' => $this->description,
            'due_date' => $this->due_date,
        ]);
        $this->toast()->success('Tarefa editada!')->send();
        $this->dispatch('task::updated');
        $this->modal = false;
    }

    public function render()
    {
        return view('livewire.todo.edit');
    }
}
