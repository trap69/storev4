@extends('layouts.app')

@section('content')
@include('shop/_partials/sidebar')
<div class="container">
    @include('shop/pages/addPost2')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{ Auth::user()->name }}
                    {{ __('you are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
