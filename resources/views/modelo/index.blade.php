@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modelos') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($modelos as $modelo)
                        <li class="list-group-item">{{ $modelo->montadora->nome }}</li>
                        <li class="list-group-item">{{ $modelo->nome }}</li>
                        <br>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection