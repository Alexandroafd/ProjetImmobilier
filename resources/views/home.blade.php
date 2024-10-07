@extends('base')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence Immobilière</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nihil deleniti aliquid hic enim commodi ullam. Repudiandae minus doloremque est unde inventore porro reiciendis nisi, aspernatur velit. Est, illum sequi?</p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
            <div class="col-3 mb-4">
                @include('property.card')
            </div>  
            @endforeach
        </div>
    </div>
@endsection