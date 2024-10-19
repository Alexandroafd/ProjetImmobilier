@extends('admin.layout')

@section('title', 'Trouver un bien')

@section('content')

<div class="row">

    <div class="col-lg-3 col-md-12">
                                
        <div class="simple-sidebar sm-sidebar" id="filter_search">
            
            <div class="search-sidebar_header">
                <h4 class="ssh_heading">Close Filter</h4>
                <button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="fa-regular fa-circle-xmark fs-5 text-muted-2"></i></button>
            </div>
            
            <div class="sidebar-widgets">
                <div class="dashboard-navbar">
                    
                    <div class="d-user-avater">
                        @if (auth()->user()->profile_pic)
                            <img src="{{ asset('storage/profile_pics/' . auth()->user()->profile_pic) }}" alt="Photo de profil" class="img-fluid avater">
                        @else
                            {{--<img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid avater" alt="">--}}
                            Aucune photo disponible
                        @endif											
                        <h4> {{Auth::user()->name}} </h4>
                        <span> {{Auth::user()->city}}, {{Auth::user()->state}} </span>
                    </div>
                    
                    <div class="d-navigation">
                        <ul>
                            <!--<li><a href="dashboard.html"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>-->
                            <li><a href="{{ route('admin.doprofile') }}"><i class="fa-solid fa-address-card"></i>Mon Profil</a></li>
                            <li><a href="{{route('admin.bookmarked')}}"><i class="fa-solid fa-bookmark"></i>Liste des favoris</a></li>
                            <li><a href="{{route('admin.property.index')}}"><i class="fa-solid fa-building-circle-check"></i>Mes Propriétés</a></li>
                            <li><a href="{{ route('admin.property.create') }}"><i class="fa-solid fa-house"></i>Ajouter un Bien</a></li>
                            <li class="active"><a href="{{route('admin.property.search')}}"><i class="fa-solid fa-gauge"></i>Rechercher un Bien</a></li>
                            <li><a href="{{route('admin.changePassword')}}"><i class="fa-solid fa-unlock"></i>Changer le mot de passe</a></li>
                            <li><a href="{{ route('logout') }}"><i class="fa-solid fa-power-off"></i>Déconnexion</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>

    <div class="col-lg-9 col-md-12">
        
    			<!-- ============================ Page Title Start================================== -->
                <section class="bg-primary">
                    <!--<div class="position-absolute start-0 top-0 w-25 h-15 bg-light rounded-end-pill opacity-25 mt-4"></div>
                    <div class="position-absolute start-0 bottom-0 w-15 h-20 bg-light rounded-top-pill opacity-25 ms-4"></div>
                    <div class="position-absolute end-0 top-0 w-15 h-25 bg-light rounded-bottom-pill opacity-25 me-4"></div>
                    <div class="position-absolute end-0 bottom-0 w-25 h-15 bg-light rounded-start-pill opacity-25 mb-4"></div>
                    <div class="ht-30"></div>
                    <div class="container">-->
    
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
                        
                    </div>
                    <div class="ht-30"></div>
                </section>
                <!-- ============================ Page Title End ================================== -->
                
                <!-- ============================ All Property ================================== -->
                <section class="bg-light">
                    <div class="container">
                                
                        <div class="row">
                            
                            <div class="col-lg-12 col-sm-12 list-layout">
                                <div class="row">
    
                                    @forelse ($properties as $property)
                                        <!-- Single Property Start -->
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="property-listing property-1 bg-white p-2 rounded">
                                                    
                                                <div class="listing-img-wrapper">
                                                    @if ($property->images)
                                                        @php
                                                            $images = json_decode($property->images, true);
                                                        @endphp
                                                
                                                        @if (is_array($images) && count($images) > 0)
                                                            <img src="{{ asset('profil_pic/' . $images[0]) }}" alt="{{$property->title}}" style="width: 100%; height: auto;">
                                                        @else
                                                            <p>Aucune image disponible.</p>
                                                        @endif
                                                    @else
                                                        <p>Aucune image disponible.</p>
                                                    @endif
                                                </div>
                                                
                                                <div class="listing-content">
                                                
                                                    <div class="listing-detail-wrapper-box">
                                                        <div class="listing-detail-wrapper d-flex align-items-center justify-content-between">
                                                            <div class="listing-short-detail">
                                                                <span class="label bg-light-success text-success d-inline-flex mb-1">{{$property->status}}</span>
                                                                <h4 class="listing-name mb-0"><a href="{{route('property.show', ['slug' => $property->getSlug(), 'property' => $property])}}">{{ Illuminate\Support\Str::limit($property->title, 25, '...') }}</a></h4>
                                                                <div class="fr-can-rating">
                                                                    <i class="fas fa-star fs-xs filled"></i>
                                                                    <i class="fas fa-star fs-xs filled"></i>
                                                                    <i class="fas fa-star fs-xs filled"></i>
                                                                    <i class="fas fa-star fs-xs filled"></i>
                                                                    <i class="fas fa-star fs-xs"></i>
                                                                    <span class="reviews_text fs-sm text-muted ms-2">(36 Reviews)</span>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="list-price">
                                                                <h6 class="listing-card-info-price text-primary">${{ $property->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="price-features-wrapper">
                                                        <div class="list-fx-features d-flex align-items-center justify-content-between">
                                                            <div class="listing-card d-flex align-items-center">
                                                                <div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-building-shield fs-sm"></i></div><span class="text-muted-2">{{ $property->floor }}</span>
                                                            </div>
                                                            <div class="listing-card d-flex align-items-center">
                                                                <div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-bed fs-sm"></i></div><span class="text-muted-2">{{ $property->rooms }}</span>
                                                            </div>
                                                            <div class="listing-card d-flex align-items-center">
                                                                <div class="square--30 text-muted-2 fs-sm circle gray-simple me-2"><i class="fa-solid fa-clone fs-sm"></i></div><span class="text-muted-2">{{ $property->surface }} mCarré</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="listing-footer-wrapper">
                                                        <div class="listing-locate">
                                                            <span class="listing-location text-muted-2"><i class="fa-solid fa-location-pin me-1"></i>{{ $property->city }}, {{ $property->state }}</span>
                                                        </div>
                                                        <div class="listing-detail-btn">
                                                            <a href="{{route('property.show', ['slug' => $property->getSlug(), 'property' => $property])}}" class="btn btn-sm px-4 fw-medium btn-primary">Voir</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- Single Property End -->																
                                    @empty
                                        <div class="col text-center">
                                            Aucun bien ne correspond à votre recherche
                                        </div>
                                    @endforelse
                                    
                                </div>
                                
                                <!-- Pagination -->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        {{ $properties->links() }}
                                    </div>
                                </div>
                        
                            </div>
                            
                        </div>
                    </div>		
                </section>
                <!-- ============================ All Property ================================== -->
    
    </div>
</div>

@endsection