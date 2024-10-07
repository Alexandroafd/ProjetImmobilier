<div class="card">
    <div class="card-body">
        @if ($property->image)
            <img src="{{ asset('profil_pic/' . $property->image) }}" alt="{{ $property->title }}" class="card-img-top" style="width: 100%; height: auto;">
        @else
            <p>Aucune image disponible.</p>
        @endif
        <h5 class="card-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>
        </h5>
        <p class="card-text">{{ $property->surface }}mCarré - {{ $property->city }} ({{ $property->postal_code }})</p>
        <div class="text-primary fw-bold" style="font-size:1.4rem; font-weight:bold;">
            {{ number_format($property->price, thousands_separator: ' ') }} euro
        </div>
    </div>
</div>