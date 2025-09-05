<div>
    <x-modal title="Concluir uma tarefa" wire center >
        <p class="text-gray-600 dark:text-gray-400">
            Você tem certeza que deseja restaurar a tarefa
            <span class="font-bold">"{{ $task?->title }}"</span>?
        </p>

        <x-slot:footer>
            <div class="flex justify-end gap-x-4">
                <x-button color="green" text="Sim, Resturar" wire:click="restore" />
            </div>
        </x-slot:footer>
    </x-modal>
</div>

