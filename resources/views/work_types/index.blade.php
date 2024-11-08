@extends("layouts.admin.base")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page-title">Lista de Tipo de Obras</h1>
                <a href="{{route('types.create')}}" class="btn btn-primary">Criar Novo Tipo</a>
                <div class="card mt-4">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th class="text-end">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Aqui, o loop deve ser substituído por uma lista de elementos gerada dinamicamente -->
                            @foreach($workTypes as $workType)
                                <tr>
                                    <td>{{ $workType->id }}</td>
                                    <td>{{ $workType->name }}</td>
                                    <td>{{ $workType->description }}</td>
                                    <td class="text-end" >
                                        <a href="{{route('types.show', $workType)}}" class="btn btn-info">Ver</a>
                                        <a href="" class="btn btn-warning">Editar</a>
                                        <form action="{{ route('types.destroy', $workType) }}" method="POST" style="display: inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Apagar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
