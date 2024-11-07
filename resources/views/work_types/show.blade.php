@extends('layouts.admin.base')

@section('title', 'Work Type Details')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $type->name }}</h3>
                        <p>{{ $type->description }}</p>
                    </div>
                </div>
                <a href="{{ route('types.index') }}" class="btn btn-secondary mt-3">Voltar</a>
            </div>
        </div>
    </div>
@endsection
