<div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-800">
    <div class="w-full max-w-2xl mx-top p-4 space-y-6">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-4xl font-bold text-primary-600 dark:text-primary-400 flex items-center gap-x-2">
                    <x-icon name="check-circle" class="w-10 h-10" />
                    <span>Todo List</span>
                </h1>
            </div>
            <div class="flex justify-end">
                <x-button 
                    lg 
                    color="primary" 
                    icon="plus" 
                    wire:click="$dispatch('todo::create')">
                </x-button>
            </div>
        </div>
        <livewire:todo.show />
        <livewire:todo.create />
        <livewire:todo.edit />
        <livewire:todo.delete />
        <livewire:todo.archive />
        <livewire:todo.restore />
    </div>
</div>