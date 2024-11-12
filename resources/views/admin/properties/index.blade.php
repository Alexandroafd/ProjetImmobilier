@extends('admin.layout')

@section('title', 'Tous les biens')

@section('content')

			<!-- ============================ User Dashboard ================================== -->
			<section class="bg-light">
				<div class="container-fluid">

                    @include('shared.alert')

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="filter_search_opt">
								<a href="javascript:void(0);" onclick="openFilterSearch()" class="btn btn-dark full-width mb-4">Dashboard Navigation<i class="fa-solid fa-bars ms-2"></i></a>
							</div>
						</div>
					</div>
								
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
												<li><a href="{{ route('admin.property.profile') }}"><i class="fa-solid fa-address-card"></i>Mon Profil</a></li>
												<li><a href="{{route('admin.property.bookmarked')}}"><i class="fa-solid fa-bookmark"></i>Liste des favoris</a></li>
												<li class="active"><a href="{{route('admin.property.index')}}"><i class="fa-solid fa-building-circle-check"></i>Mes Propriétés</a></li>
												<li><a href="{{ route('admin.property.create') }}"><i class="fa-solid fa-house"></i>Ajouter un Bien</a></li>
                                                <li><a href="{{route('admin.property.search')}}"><i class="fa-solid fa-gauge"></i>Rechercher un Bien</a></li>
												<li><a href="{{route('admin.property.changePassword')}}"><i class="fa-solid fa-unlock"></i>Changer le mot de passe</a></li>
												<li><a href="{{ route('logout') }}"><i class="fa-solid fa-power-off"></i>Déconnexion</a></li>
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-12">
							<div class="dashboard-wraper">
							
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>Mes Biens</h4>
								</div>
								
								<div class="row">
                                    @foreach ($properties as $property)
                                        <!-- Single Property -->
                                        <div class="col-md-12 col-sm-12 col-md-12">
                                            <div class="singles-dashboard-list">
                                                <div class="sd-list-left">
                                                    @if ($property->images)
                                                        @php
                                                            // Décoder la chaîne JSON en tableau
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
                                                <div class="sd-list-right">
                                                    <h4 class="listing_dashboard_title"><a href="" class="text-primary">{{ $property->title }}</a></h4>
                                                    <div class="user_dashboard_listed">
                                                        Prix: $ {{ number_format($property->price, thousands_separator: ' ')}}                                                    
                                                    <div class="user_dashboard_listed">
                                                        Surface: {{ $property->surface }} mCarré
                                                    </div>
                                                    <div class="user_dashboard_listed">
                                                        Ville: <a href="javascript:void(0);" class="text-primary">{{ $property->city }}</a>
                                                    </div>
                                                    <div class="action">
                                                        <a href="{{ route('admin.property.edit', $property) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="{{ route('admin.property.destroy', $property) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer" class="delete"><i class="fa-regular fa-circle-xmark"></i></a>
                                                        {{--<a href="{{route('admin.bookmarked')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Ajouter aux favoris" class="delete"><i class="fa-solid fa-star"></i></a>--}}
                                                        <form action="{{ route('admin.property.favori', $property) }}" method="post" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Ajouter aux favoris" class="delete">
                                                                <i class="fa-solid fa-star"></i>
                                                            </button>
                                                        </form>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
								    @endforeach	
								</div>
								
							</div>
						</div>
                        {{$properties->links()}}
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
@endsection
