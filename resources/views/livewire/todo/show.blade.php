<div>
    <div class="space-x-4 mb-4">
        <span class="font-semibold text-gray-700">
                {{ $filter === 'ativas' ? 'Tarefas Ativas' : 'Tarefas Concluídas' }}
        </span>
        <x-button wire:click="toggleFilter" class="bg-indigo-500 hover:bg-indigo-600 text-white px-3 py-1 rounded">
            {{ $filter === 'ativas' ? 'Ver concluídas' : 'Ver ativas' }}
        </x-button>
    </div>
    <div class="space-y-2">
        @foreach ($this->tasks as $task)
            <x-card header="{{ $task->title }}" wire:key="{{ $task->id }}">
                <p class="text-gray-700 dark:text-gray-300">
                    {{ $task->description }}
                </p>
                <div class="mt-3 flex items-center gap-x-2 text-sm text-gray-500 dark:text-gray-400">
                <x-icon name="calendar-days" class="h-4 w-4" />
                    <span>Prazo: {{ $task->due_date->format('d/m/Y') }}</span>
                </div>
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
                        @if (!$task->completed === true)
                        <x-button.circle
                            icon="check"
                            color="green"
                            flat md
                            wire:click="$dispatch('todo::archive', { id: {{ $task->id }} })"
                        />
                        @else
                        <x-button.circle
                            icon="arrow-path"
                            color="green"
                            flat md
                            wire:click="$dispatch('todo::restore', { id: {{ $task->id }} })"
                        />
                    @endif
                    </div>
                </x-slot:footer>
            </x-card>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $this->tasks->links(data: ['scrollTo' => false]) }} 
    </div>
</div>
