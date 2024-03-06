<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.users.index', ['users' => User::where('name', 'like', '%'. $this->search. '%')->paginate(6)]);
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