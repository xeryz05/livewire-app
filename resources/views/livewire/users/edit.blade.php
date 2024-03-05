@section('title')
    Edit Post - Belajar Livewire 3 di SantriKoding.com
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form wire:submit="update" enctype="multipart/form-data">
                        <<div class="form-group mb-4">
                            <label class="fw-bold">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                wire:model="name" placeholder="Masukkan Nama User">

                            <!-- error message untuk name -->
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                </div>
                <div class="form-group mb-4">
                    <label class="fw-bold">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email"
                        placeholder="Masukkan Judul Post">

                    <!-- error message untuk email -->
                    @error('email')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label class="fw-bold">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        wire:model="password" placeholder="Masukkan Judul Post">

                    <!-- error message untuk password -->
                    @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                </form>
            </div>
        </div>
    </div>
</div>
