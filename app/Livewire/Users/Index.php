<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.users.index', ['users' => User::latest()->paginate(5)]);
    }

    public function destroy($id)
    {
        $user = User::destroy($id);

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->route('users.index');

    }
}