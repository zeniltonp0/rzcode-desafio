<div>
    <div class="space-y-2">
        @foreach ($this->tasks as $task)
            <x-card header="{{ $task->title }}">
                {{ $task->description }}
                {{ $task->due_date->format('d/m/Y') }}
                <x-slot:footer>
                    <div class="flex justify-end gap-x-2">
                        <x-button.circle
                            icon="pencil"
                            color="primary"
                            flat md
                            wire:click="$dispatch('todo::edit', { id: {{ $task->id }} })"
                        />
                        <x-button.circle
                            icon="trash"
                            color="red"
                            flat md
                            wire:click="$dispatch('todo::delete', { id: {{ $task->id }} })"
                        />
                    </div>
                </x-slot:footer>
            </x-card>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $this->tasks->links(data: ['scrollTo' => false]) }} 
    </div>
</div>
