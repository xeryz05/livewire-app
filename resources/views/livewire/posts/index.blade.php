@section('title')
@endsection
<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
            @if (session()->has('message'))
                <div class="bg-teal-500 text-sm text-white rounded-lg p-4" role="alert">
                    <span class="font-bold">{{ session('message') }}</span>
                </div>
            @endif
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
          <!-- Header -->
          <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
            <a href="{{ route('posts.create') }}" wire:navigate type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-teal-500 hover:bg-teal-100 hover:text-teal-800 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-teal-800/30 dark:hover:text-teal-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Add New Post
            </a>
          </div>
          <!-- End Header -->

          <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="py-3 px-4">
                            <div class="relative max-w-xs">
                                <label for="hs-table-search" class="sr-only">Search</label>
                                <input type="text" wire:model.live="search" name="hs-table-search" id="hs-table-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search for items">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <table class="table-fixed min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Image</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Title</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Content</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($posts as $post)
                            <tr>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                    {{$loop->iteration}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                    <img src="{{ $post->image }}" alt="" srcset="" class="w-28">
                                </td>
                                <td wire:key="{{ $post->title }}" class="px-6 py-4 whitespace text-sm text-gray-800 dark:text-gray-200">
                                    {{ $post->title }}
                                </td>
                                <td class="px-6 py-4 whitespace text-sm text-gray-800 dark:text-gray-200">
                                    {{ $post->content }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                    <button wire:click="destroy({{ $post->id }})" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-500 hover:bg-red-100 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-red-800/30 dark:hover:text-red-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                        Delete
                                    </button>
                                    <a href="{{ route('posts.edit', $post->id) }}" wire:navigate type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-teal-500 hover:bg-teal-100 hover:text-teal-800 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-teal-800/30 dark:hover:text-teal-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                        Button
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                    </div>
                </div>
            </div>
          <!-- End Table -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->