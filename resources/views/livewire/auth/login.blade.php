<div class="mx-auto w-[450px]">
    <x-card>
        <h2 class="text-2xl text-center">Logar na conta</h2>
        <form wire:submit="login">
            @csrf
            <div class="mb-4">
                <x-input label="Email" wire:model.blur="email"/>
            </div>
            <div class="mb-4">
                <x-password label="Senha" wire:model.blur="password"/>
            </div>

            <div>
                <x-link href="{{ route('register') }}" text="Ainda não possui conta?" underline wire:navigate/>
            </div>

            <div class="mx-80">
                <x-button submit>Login</x-button>
            </div>
        </form>
    </x-card>
</div>