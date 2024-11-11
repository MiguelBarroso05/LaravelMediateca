@extends("layouts.admin.base")

@section("content")
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Lista de Autores</h2>
            <a href="{{route('authors.create')}}" class="btn btn-primary mb-3">Criar Novo Autor</a>
            <div class="card mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
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
                                <td>{{ $author->id }}</td>
                                <td>{{ $author->name }}</td>
                                <td style="width: 1080px">{{$author->biography}}</td>
                                <td><img src="caminho/para/foto.jpg" alt="Foto do Autor" width="50"></td>
                                <td class="text-end">
                                    <a href="{{route('authors.show', $author)}}" class="btn btn-info"><i class="ti ti-eye"></i></a>
                                    <a href="{{route('authors.edit', $author)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <form action="{{route('authors.destroy', $author)}}" method="POST" style="display:inline;">
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
            </div>
        </div>
    </div>
</div>
@endsection
