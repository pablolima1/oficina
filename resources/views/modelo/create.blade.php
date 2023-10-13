@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Novo Modelo') }}</div>

                <div class="card-body">
                    <form action="{{route('modelo.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Selecione a Montadora</label>
                            <select class="form-select" aria-label="Default select example" name="montadora" required>
                                <option value="">Selecione</option>
                                @foreach($montadoras as $montadora)
                                <option value="{{ $montadora->id }}">{{ $montadora->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Potência</label>
                            <input type="text" class="form-control" name="potencia" required>
                        </div>
                        <button type="submit" class="btn btn-padrao">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection