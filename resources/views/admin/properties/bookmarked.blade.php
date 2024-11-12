@extends('admin.layout')

@section('title', 'Mes Biens Favoris')

@section('content')

    @include('shared.alert')

    		<!-- ============================ User Dashboard ================================== -->
			<section class="bg-light">
				<div class="container-fluid">
				
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
												<li><a href="{{route('admin.property.profile')}}"><i class="fa-solid fa-address-card"></i>Mon Profil</a></li>
												<li class="active"><a href="{{route('admin.property.bookmarked')}}"><i class="fa-solid fa-bookmark"></i>Liste des Favoris</a></li>
												<li><a href="{{route('admin.property.index')}}"><i class="fa-solid fa-building-circle-check"></i>Mes Propriétés</a></li>
												<li><a href="{{route('admin.property.create')}}"><i class="fa-solid fa-house"></i>Ajouter un Bien</a></li>
                                                <li><a href="{{route('property.index')}}"><i class="fa-solid fa-gauge"></i>Rechercher un Bien</a></li>
												<li><a href="{{route('admin.property.changePassword')}}"><i class="fa-solid fa-unlock"></i>Changer le Mot de passe</a></li>
												<li><a href="{{route('logout')}}"><i class="fa-solid fa-power-off"></i>Déconnexion</a></li>
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
									<h4>Mes Propriétés Favorites</h4>
								</div>
								
								<table class="property-table-wrap responsive-table bkmark">

									<tbody>
                                        @if ($favoris->isNotEmpty())
                                            @foreach ($favoris as $favori)
                                            <tr>
                                                <th><i class="fa fa-file-text"></i>Propriétés</th>
                                                <th></th>
                                            </tr>
    
                                            <!-- Item #1 -->
                                            <tr>
                                                <td class="property-container">
                                                    @if ($favori->property->image)
                                                        <img src="{{ asset('profil_pic/' . $favori->property->image) }}" alt="{{ $favori->property->title }}" class="card-img-top" style="width: 10%; height: auto;">
                                                    @else
                                                        <p>Aucune image disponible.</p>
                                                    @endif                                                    
                                                    <div class="title">
                                                        <h4><a href=""> {{$favori->property->title}} </a></h4>
                                                        <span> Ville : {{$favori->property->city}} </span>
                                                        <span class="table-property-price"> {{$favori->property->price}} USD</span>
                                                    </div>
                                                </td>
                                                {{--<td class="action">
                                                    <a href="{{ route('admin.delete.favori', $favori) }}" class="delete"><i class="fa-solid fa-trash-can"></i> Supprimer</a>
                                                </td>--}}
                                                <td class="action">
                                                    <form action="{{ route('admin.delete.favori', $favori) }}" method="post" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="delete" style="background: none; border: none; padding: 0;">
                                                            <i class="fa-solid fa-trash-can"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </td>
                                                
                                            </tr>  
                                            @endforeach
                                        @else
                                            <tr>
                                                <td>Aucun favori</td>
                                            </tr>
                                        @endif
									</tbody>
								</table>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->

@endsection