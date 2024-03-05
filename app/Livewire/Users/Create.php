<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $email;
    public $password;

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8'
        ]);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        // $this->reset();

        session()->flash('message', 'User created successfully.');

        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.users.create');
    }

}