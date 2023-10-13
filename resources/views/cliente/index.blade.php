@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Clientes') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($clientes as $cliente)
                        <li class="list-group-item">{{ $cliente->nome }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection