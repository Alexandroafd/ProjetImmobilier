@extends('base')

@section('title', 'Se connecter')

@section('content')

    <div class="mt-4 container">
        <h1>@yield('title')</h1>

        @if (Session::has('success'))
            <div class="bg-success py-4 mb-4 rounded">
                <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('success') }} </p>
            </div>
            @endif
        
            @if (Session::has('error'))
            <div class="bg-danger py-4 mb-4 rounded">
                <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('error') }} </p>
            </div>
        @endif
        
        <form method="post" action="{{ route('login') }}" class="vstack gap-3">
            @csrf
            @include('shared.input', [
                        'class' => 'col',
                        'type' => 'email',
                        'label' => 'Email',
                        'name' => 'email'
                        ]) 
            @include('shared.input', [
                'class' => 'col',
                'type' => 'password',
                'label' => 'Mot de passe',
                'name' => 'password'
                ]) 
            <div>
                <button class="btn btn-primary">
                    Se connecter
                </button>
            </div>
        </form>
    </div>
@endsection