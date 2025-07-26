<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersCreate extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.users-create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6'

        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
        session()->flash('success', 'session berhasil dibuat');
    }
}
