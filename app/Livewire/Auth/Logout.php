<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect(route('login'));
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <x-button lg icon="arrow-left-start-on-rectangle" text="Sair" class="btn-ghost" color="red" wire:click="logout"/>
        </div>
        HTML;
    }
}
