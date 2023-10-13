@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Montadoras') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($montadoras as $montadora)
                        <li class="list-group-item">{{ $montadora->nome }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection