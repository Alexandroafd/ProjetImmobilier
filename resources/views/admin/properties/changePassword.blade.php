@extends('admin.layout')

@section('title', 'Modifier le mot de passe')

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
												<li><a href="{{route('admin.property.bookmarked')}}"><i class="fa-solid fa-bookmark"></i>Liste des Favoris</a></li>
												<li><a href="{{route('admin.property.index')}}"><i class="fa-solid fa-building-circle-check"></i>Mes Propriétés</a></li>
												<li><a href="{{route('admin.property.create')}}"><i class="fa-solid fa-house"></i>Ajouter un Bien</a></li>
												<li><a href="{{route('property.index')}}"><i class="fa-solid fa-gauge"></i>Rechercher un Bien</a></li>
												<li class="active"><a href="{{route('admin.property.changePassword')}}"><i class="fa-solid fa-unlock"></i>Changer le Mot de passe</a></li>
												<li><a href="{{route('logout')}}"><i class="fa-solid fa-power-off"></i>Déconnexion</a></li>
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-12">
							<div class="dashboard-wraper">
							
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4>Changer votre Mot de Passe</h4>
                                    <form method="post" action="{{route('admin.property.updatePassword')}}">
                                        @csrf
                                        <div class="submit-section">
                                            <div class="row">
                                            
                                                <div class="form-group col-lg-12 col-md-6">
                                                    <label>Ancien mot de passe</label>
                                                    <input id="old_password" name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" value="{{ old('old_password') }}">
                                                    @error('old_password')
                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group col-lg-12 col-md-6">
                                                    <label>Nouveau mot de passe</label>
                                                    <input id="new_password" name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" value="{{ old('new_password') }}">
                                                    @error('new_password')
                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group col-lg-12 col-md-6">
                                                    <label>Confirmer le mot de passe</label>
                                                    <input id="confirm_password" name="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" value="{{ old('confirm_password') }}">
                                                    @error('confirm_password')
                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group col-lg-12 col-md-12">
                                                    <button class="btn btn-primary px-5 rounded" type="submit">Changer</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->

@endsection