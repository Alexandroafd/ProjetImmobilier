@extends('base')

@section('title', 'Tous nos biens')

@section('content')

<div class="bg-light p-5 mb-5 text-center">
    <form action="" method="get" class="container d-flex gap-2">
        <input type="number" placeholder="Surface minimum" class="form-control" name="surface" value="{{ request('surface', $input['surface'] ?? '') }}">
        <input type="number" placeholder="Nombre de pièce" class="form-control" name="rooms" value="{{ request('rooms', $input['rooms'] ?? '') }}">
        <input type="number" placeholder="Budget max" class="form-control" name="price" value="{{ request('price', $input['price'] ?? '') }}">
        <input type="text" placeholder="Mot clef"  class="form-control" name="title" value="{{ request('title', $input['title'] ?? '') }}">
        <button class="btn btn-primary btn-sn flex-grow-0">
            Rechercher
        </button>
    </form>
</div>
    <div class="container">
        <div class="row">
            @forelse ($properties as $property)
                <div class="col-3 mb-4">
                    @include('property.card')
                </div>
            @empty
                <div class="col text-center">
                    Aucun bien ne correspond à votre recherche
                </div>
            @endforelse
        </div>
        <div class="my-4">
            {{ $properties->links() }}
        </div>
    </div>
@endsection
