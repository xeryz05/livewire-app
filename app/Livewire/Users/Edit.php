<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;

class Edit extends Component
{
    public $userID;
    public $name;
    public $email;
    public $password;

    public function mount($id)
    {
        //get post
        $user = User::find($id);

        //assign
        $this->userID = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = '';
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->userID,
            // 'password' => 'required',
        ]);

        $user = User::find($this->userID);
        if (!empty($this->password)) {
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
        } else {
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
        }

        session()->flash('message', 'User updated successfully.');

        return redirect()->route('users.index');
    }
    public function render()
    {
        return view('livewire.users.edit');
    }
}