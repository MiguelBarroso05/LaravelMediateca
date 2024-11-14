@extends('layouts.admin.base')

@section('title', 'Edit Work Type')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Editar Tipo de Obra</h4>
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

                    <form action="{{route('types.update', $type)}}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="id" class="form-label required">ID</label>
                            <input type="text" id="id" name="id" class="form-control bg-light" value="{{$type->id}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="form-label required">Nome do Tipo de Obra</label>
                            <input type="text" id="nome" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{old('name', $type->name)}}" >
                            @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea id="descricao" name="description" class="form-control  @error('description') is-invalid @enderror" rows="4" >{{old('description', $type->description)}}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                            <a href="{{ route('types.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
