<div>
    <x-modal title="Apagar uma tarefa" wire center >
        <p class="text-gray-600 dark:text-gray-400">
            Você tem certeza que deseja apagar a tarefa
            <span class="font-bold">"{{ $task?->title }}"</span>?
            Esta ação não pode ser desfeita.
        </p>

        <x-slot:footer>
            <div class="flex justify-end gap-x-4">
                <x-button color="red" text="Sim, Apagar" wire:click="delete" />
            </div>
        </x-slot:footer>
    </x-modal>
</div>

