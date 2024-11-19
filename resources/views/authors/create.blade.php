@extends("layouts.admin.base")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Create new Author</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div id="success-alert" class="alert alert-success alert-dismissible fade show"
                             role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Alerta para mensagem de erro geral -->

                    @if($errors->has('error'))

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$errors->first('error')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{route('authors.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Author Name</label>
                            <input type="text" id="nome" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                            @error('name')
                            <div class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="biografia" class="form-label">Biography</label>
                            <textarea id="biografia" name="biography" class="form-control @error('biography') is-invalid @enderror" rows="4">{{old('biography')}}</textarea>
                            @error('biography')
                            <div class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Image</label>
                            <input type="file" id="foto" name="image" class="form-control">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{route('authors.index')}}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
