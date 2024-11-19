@extends("layouts.admin.base")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col mb-3 d-flex justify-content-end">
                <a href="{{route('authors.create')}}" class="btn btn-primary">Criar Novo Autor</a>
            </div>

        </div>

        <div class="card">
        <div class="card-body border-bottom py-3">
            <div class="d-flex">
                <div class="text-secondary">
                    Mostrar
                    <div class="mx-2 d-inline-block">
                        <input type="text" class="form-control form-control-sm" value="10" size="3"
                               aria-label="Quantidade de entradas">
                    </div>
                    Registos
                </div>
                <div class="ms-auto text-secondary">
                    Procurar:
                    <div class="ms-2 d-inline-block">
                        <input type="text" class="form-control form-control-sm" size="30" aria-label="Procurar autor">
                    </div>
                </div>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                           aria-label="Selecionar todos"></th>

                    <th>ID</th>
                    <th>Nome</th>
                    <th>Biografia</th>
                    <th>Foto</th>
                    <th class="w-auto text-end">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                               aria-label="Selecionar todos"></td>

                        <td>{{ $author->id }}</td>
                        <td>{{ $author->name }}</td>
                        <td class="w-50">{{$author->biography}}</td>
                        <td><img src="{{$author-> image ?asset('storage/'.$author->image): asset('imgs/no-image.png') }}" alt="Foto do Autor" width="50"></td>
                        <td class="text-end" style="justify-content: center; align-content: center">
                            <a href="{{route('authors.show', $author)}}" class="btn btn-info"><i class="ti ti-eye"></i></a>
                            <a href="{{route('authors.edit', $author)}}" class="btn btn-warning"><i class="fa fa-pencil"
                                                                                                    aria-hidden="true"></i></a>
                            <form action="{{route('authors.destroy', $author)}}" method="POST" style="display:inline-block;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="ti ti-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <!-- Repetir conforme necessário -->
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex align-items-center">
            {{$authors->links('layouts.admin.parts.pagination',['authors'=>$authors])}}
        </div>

    </div>

@endsection
