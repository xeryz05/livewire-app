<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    // protected $paginationTheme = 'bootstrap';


       public function destroy($id)
    {
        //destroy
        Post::destroy($id);

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->route('posts.index');
    }
    public function render()
    {
        return view('livewire.posts.index', [
            'posts' => Post::where('title', 'like', '%'. $this->search. '%')->paginate(5)
        ]);
    }
}
