<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.guest')]
class Login extends Component
{
    #[Rule(['required', 'email'])]
    public ?string $email = null;

    #[Rule(['required'])]
    public ?string $password = null;

    public function login()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            request()->session()->regenerate();

            return $this->redirect(route('dashboard'));
        }

        $this->addError('email', 'As credenciais fornecidas não correspondem aos nossos registros.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
