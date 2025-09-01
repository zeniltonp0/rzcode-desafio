<div class="mx-auto w-[450px]">
    <x-card>
        <h2 class="text-2xl text-center">Criar conta</h2>
        <form wire:submit="register">
            @csrf
            <div class="mb-4">
                <x-input label="Nome" wire:model.blur="name"/>
            </div>
            <div class="mb-4">
                <x-input label="Email" wire:model.blur="email"/>
            </div>
            <div class="mb-4">
                <x-password label="Senha" wire:model.blur="password"/>
            </div>
            <div class="mb-4">
                <x-password label="Confirmação de senha" wire:model.blur="password_confirmation"/>
            </div>

            <div>
                <x-link href="{{ route('login') }}" text="Já tem uma conta?" underline wire:navigate/>
            </div>

            <div class="mx-80">
                <x-button submit>Registrar</x-button>
            </div>
        </form>
    </x-card>
</div>