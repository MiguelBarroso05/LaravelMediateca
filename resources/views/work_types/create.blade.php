@extends('layouts.admin.base')

@section('title', 'Create Work Type')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Insira os dados do novo tipo de obra</h4>
                    </div>
                    <div class="card-body">
                        <!-- Alerta para mensagem de sucesso -->
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
                        <form action="{{ route('types.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label required">Nome do Tipo de Obra</label>
                                <input type="text" id="nome" name="name"
                                       class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}"
                                       required>
                                @error('name')
                                <div class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea id="descricao" name="description"
                                          class="form-control  @error('description') is_invalid @enderror"
                                          rows="4">{{old('description')}}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <a href="{{ route('types.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const successAlert = document.getElementById('success-alert');//
            if (successAlert) {
                setTimeout(function () {
                    // Adiciona a classe 'fade' e remove a classe 'show' para iniciar a transição de fechamento
                    successAlert.classList.remove('show');
                    successAlert.classList.add('fade');

                    // Remove o elemento do DOM depois da transição
                    setTimeout(function () {
                        successAlert.remove();
                    }, 500); // Ajuste o tempo conforme o efeito 'fade'
                }, 3000); // Fecha o alerta após 3 segundos
            }
        });
    </script>

@endpush
