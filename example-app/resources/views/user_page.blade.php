@extends('layouts.app')

@section('content')
<div class="container">
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

                    {{ __('You are logged in!') }}

                    <div class="info user">
                        <div class="m-3">Your ID: {{$user->id}}</div>
                        <div class="m-3">Your login: {{$user->name}}</div>
                        <div class="m-3">Your e-mail: {{$user->email}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection