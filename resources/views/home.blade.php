@extends('layouts.app')

@section('title','Hussein_Helal | Home')
@section('logo','Hussein_Helal')


@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hussein_Helal | Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
        
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <header>
                    <p>   My Name Is Hussein Helal, i'm <span class='text-success'> 25yo </span> and i'm a <span class='text-primary'> Lamp Stack Developer. </span> </p> <br>
                            <img src="{{asset('public/img/wall.png')}}" alt="header_picture">
                </header>
            </div>
        </div>
    </div>
</div>
@endsection
