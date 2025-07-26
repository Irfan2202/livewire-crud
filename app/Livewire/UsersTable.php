<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::orderBy('id', 'desc')->get()
        ]);
    }
}
