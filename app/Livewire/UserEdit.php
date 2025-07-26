<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component

{
    public $userId;
    public $name;
    public $email;

    public function mount($id)
    {
        $user = User::findOrFail($id);
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('message', 'User updated successfully.');
    }
    public function render()
    {
        return view('livewire.user-edit');
    }
}
