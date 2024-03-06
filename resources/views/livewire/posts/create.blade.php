@section('title')
Create Post - Belajar Livewire 3 di SantriKoding.com
@endsection

<!-- Comment Form -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="mx-auto max-w-2xl">
    <div class="text-center">
      <h2 class="text-xl text-gray-700 font-bold sm:text-3xl dark:text-white">
        Create new post
      </h2>
    </div>

    <!-- Card -->
    <div class="mt-5 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10 dark:bg-gray-800 dark:border-gray-700">
      <form wire:submit="save" enctype="multipart/form-data">
        <div class="mb-4 sm:mb-8">
        <label for="file-input" class="sr-only">Image</label>
        <input type="file" name="image" id="file-input" class="@error('image') is-invalid @enderror  block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
            file:bg-gray-50 file:border-0
            file:me-4
            file:py-3 file:px-4
            dark:file:bg-gray-700 dark:file:text-gray-400" wire:model="image">
            @error('image')
                <div class="bg-red-500 text-sm text-white rounded-lg p-4" role="alert">
                    <span class="font-bold">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="mb-4 sm:mb-8">
          <label for="hs-feedback-post-comment-name-1" class="block mb-2 text-sm font-medium dark:text-white">Title</label>
          <input name="title" type="text" id="hs-feedback-post-comment-name-1" class="@error('title') is-invalid @enderror py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" wire:model="title" placeholder="Full name">
            @error('title')
                <div class="bg-red-500 text-sm text-white rounded-lg p-4" role="alert">
                    <span class="font-bold">{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div>
          <label for="hs-feedback-post-comment-textarea-1" class="block mb-2 text-sm font-medium dark:text-white">Content</label>
          <div class="mt-1">
            <textarea id="hs-feedback-post-comment-textarea-1" name="content" rows="3" class="@error('content') is-invalid @enderror py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Leave your comment here..." wire:model="content"></textarea>
          </div>
          @error('content')
            <div class="bg-red-500 text-sm text-white rounded-lg p-4" role="alert">
                <span class="font-bold">{{ $message }}</span>
            </div>
            @enderror
        </div>

        <div class="mt-6 grid grid-cols-2 gap-2">
            <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-teal-500 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Submit
            </button>
            <button type="reset" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-yellow-500 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Reset
            </button>
        </div>
      </form>
    </div>
    <!-- End Card -->
  </div>
</div>
<!-- End Comment Form -->

{{-- <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form wire:submit="save" enctype="multipart/form-data">

                        <div class="form-group mb-4">

                            <label class="fw-bold">GAMBAR</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" wire:model="image">

                            <!-- error message untuk title -->
                            @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">JUDUL</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title" placeholder="Masukkan Judul Post">

                            <!-- error message untuk title -->
                            @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">KONTEN</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" wire:model="content" rows="5" placeholder="Masukkan Konten Post"></textarea>

                            <!-- error message untuk content -->
                            @error('content')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}