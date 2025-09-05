<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.guest')]
class Register extends Component
{
    #[Rule(['required', 'max:255', 'string'])]
    public ?string $name = null;

    #[Rule(['required', 'max:255', 'email', 'string', 'unique:users,email'])]
    public ?string $email = null;

    #[Rule(['required', 'string', 'min:8', 'same:password_confirmation'])]
    public ?string $password = null;

    public ?string $password_confirmation = null;

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        Auth::login($user);

        $this->redirect(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
