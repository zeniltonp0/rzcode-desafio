<div>
    <x-modal title="Editar uma tarefa" wire center>
        <form wire:submit="save" id="edit-task-form">
            <div class="space-y-4">
                <x-input label="Título" wire:model="title"/>
                <x-textarea label="Descrição" wire:model="description" resize-auto/>
                <x-date label="Prazo" format="DD/MM/YYYY" wire:model="due_date"/>
            </div>
        </form>
        <x-slot:footer>
            <x-button form="edit-task-form" type="submit" text="Editar" primary md wire:loading.attr="disabled" />
        </x-slot:footer>
    </x-modal>
</div>

