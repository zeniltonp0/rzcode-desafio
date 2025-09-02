<div class="space-y-2">
    @foreach ($this->tasks as $task)
        <x-card header="{{ $task->title }}">
            {{ $task->description }}
            {{ $task->due_date->format('d/m/Y') }}
        </x-card>
    @endforeach
</div>
