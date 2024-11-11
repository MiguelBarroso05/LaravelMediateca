@extends("layouts.admin.base")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Criar Novo Autor</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('authors.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome do Autor</label>
                            <input type="text" id="nome" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                            @error('name')
                            <div class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="biografia" class="form-label">Biografia</label>
                            <textarea id="biografia" name="biography" class="form-control @error('biography') is-invalid @enderror" rows="4">{{old('biography')}}</textarea>
                            @error('biography')
                            <div class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" id="foto" name="image" class="form-control">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="{{route('authors.index')}}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
