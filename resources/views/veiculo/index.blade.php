@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Veículos') }}</div>

                <div class="card-body">

                    @foreach($veiculos as $veiculo)
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $veiculo->modelo->nome }}</li>
                            <li class="list-group-item">{{ $veiculo->placa }}</li>
                            <li class="list-group-item">{{ $veiculo->cliente->nome }}</li>
                        </ul>
                        <div class="card-footer">
                            <button type="button" class="btn btn-padrao">Consultar</button>
                        </div>
                    </div>
                    <br>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection