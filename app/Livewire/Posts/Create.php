<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Create extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Masukkan Gambar Post')]
    #[Validate('image', message: 'File Harus Gambar')]
    #[Validate('max:1024', message: 'Ukuran File Maksimal 1MB')]
    public $image;
    #[Validate('required')]

    
    #[Validate('required', message: 'Masukkan Judul Post')]
    public $title = '';
    
    #[Validate('required', message: 'Masukkan Isi Post')]
    #[Validate('min:3', message: 'Isi Post Minimal 3 Karakter')]
    public $content = '';

    public function save()
    {
        $this->validate();

        $this->image->storeAs('public/posts', $this->image->hashName());

        Post::create(
            $this->only(['image','title','content'])
        );

        session()->flash('massage', 'Data berhasil ditambahkan');

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
