@extends('base')

@section('title', $property->title)

@section('content')
<div class="container mt-4">
    <h1>{{ $property->title }}</h1>
    <h2>{{ $property->rooms }}pièces - {{ $property->surface }}mCarré</h2>

    <div class="text-primary fw-bold" style="font-size: 4rem;">
        {{ number_format($property->price, thousands_separator: ' ') }} euro
    </div>

    <hr>

    <div class="mt-4">
        <h4>Intéressé par ce bien ?</h4>

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
        
        <form action="{{ route('property.contact', $property) }}" method="post" class="vstack gap-3">
            @csrf
            <div class="row">
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Nom',
                    'name' => 'lastname',
                    'value' => 'John'
                    ])
                @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Prénom',
                        'name' => 'firstname',
                        'value' => 'Doe'
                        ])
            </div>
            <div class="row">
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Téléphone',
                    'name' => 'phone',
                    'value' => '06 00 00 00 00'
                    ])
                @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Email',
                        'name' => 'email',
                        'value' => 'john@doepublic.fr'
                        ])
            </div>
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Votre message',
                'name' => 'message',
                'value' => 'Mon petit message'
                ])
            <div>
                <button class="btn btn-primary">Nous contacter</button>
            </div>
        </form>
    </div>

    <div class="mt-4">
        <p>{!! nl2br($property->description) !!}</p>
        <div class="row">
            <div class="col-8">
                <h2>Caractéristiques</h2>
                <table class="table table-striped">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ $property->surface }}</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ $property->rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ $property->bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ $property->floor ?: 'Rez de chaussé' }}</td>
                    </tr>
                    <tr>
                        <td>Localisation</td>
                        <td>
                            {{ $property->address }} <br/>
                            {{ $property->city }} ({{ $property->postal_code }})
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <h2>Spécificités</h2>
                <ul class="list-group">
                    @foreach ($property->options as $option)
                    <li class="list-group-items">{{ $option->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
