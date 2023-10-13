@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Novo Veículo') }}</div>

                <div class="card-body">
                    <form action="{{route('veiculo.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Selecione o Cliente</label>
                            <select class="form-select" aria-label="Default select example" name="cliente" required>
                                <option value="">Selecione</option>
                                @foreach($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Selecione a Modelo</label>
                            <select class="form-select" aria-label="Default select example" name="modelo" required>
                                <option value="">Selecione</option>
                                @foreach($modelos as $modelo)
                                <option value="{{ $modelo->id }}">{{ $modelo->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Placa</label>
                            <input type="text" class="form-control" name="placa" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Ano Fabricação</label>
                            <input type="text" class="form-control" name="ano_fabricacao" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Modelo Fabricação</label>
                            <input type="text" class="form-control" name="ano_modelo" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Cor</label>
                            <input type="text" class="form-control" name="cor" required>
                        </div>
                        <button type="submit" class="btn btn-padrao">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection