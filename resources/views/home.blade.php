@extends('layouts.app')
@extends('layouts.template')


@section('content')
    @section('scripts')
<div class="container">
    @endsection
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


                <div class="card-body">
    @section('title')Template @endsection
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {{ __('You are logged in!') }}
    @section('estilo')
                </div>
    @endsection
            </div>

        </div>
    @section('nav&footer')
    </div>
    @endsection
</div>
@endsection
