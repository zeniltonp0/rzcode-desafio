<div>
    <x-modal title="Concluir uma tarefa" wire center >
        <p class="text-gray-600 dark:text-gray-400">
            Você tem certeza que deseja marcar a tarefa
            <span class="font-bold">"{{ $task?->title }}"</span>
            como concluída?
        </p>

        <x-slot:footer>
            <div class="flex justify-end gap-x-4">
                <x-button color="green" text="Sim, Concluir" wire:click="archive" />
            </div>
        </x-slot:footer>
    </x-modal>
</div>

