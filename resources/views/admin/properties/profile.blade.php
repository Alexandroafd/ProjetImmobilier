@extends('admin.layout')

@section('title', 'Mon profil')

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
                                                <img src="{{ asset('storage/profile_pics/' . auth()->user()->profile_pic) }}" class="img-fluid avater" alt="Photo de profil">
                                            @else
                                                Aucune photo disponible
                                            @endif

                                            <form method="POST" action="{{route('admin.updateProfile')}}" enctype="multipart/form-data">
                                                @csrf
                                            
                                                <div class="form-group">
                                                    <!--<label for="profile_pic">Mettre une photo de profil</label>-->
                                                    <input type="file" name="profile_pic" class="form-control @error('profile_pic') is-invalid @enderror">
                                                    @error('profile_pic')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            
                                                <button type="submit" class="btn btn-primary">Charger une photo de profil</button>
                                            </form>
                                            <h4> {{Auth::user()->name}} </h4>
											<span>Canada USA</span>
										</div>
										
										<div class="d-navigation">
											<ul>
												<li class="active"><a href="{{route('admin.profile')}}"><i class="fa-solid fa-address-card"></i>Mon Profil</a></li>
												<li><a href="{{route('admin.bookmarked')}}"><i class="fa-solid fa-bookmark"></i>Liste des Favoris</a></li>
												<li><a href="{{route('admin.property.index')}}"><i class="fa-solid fa-building-circle-check"></i>Mes Propriétés</a></li>
												<li><a href="{{route('admin.property.create')}}"><i class="fa-solid fa-house"></i>Ajouter un Bien</a></li>
                                                <li><a href="{{route('property.index')}}"><i class="fa-solid fa-gauge"></i>Rechercher un Bien</a></li>
												<li><a href="{{route('admin.changePassword')}}"><i class="fa-solid fa-unlock"></i>Changer le Mot de passe</a></li>
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
									<h4>Mon Compte</h4>
									<div class="submit-section">
                                        <form method="post" action="{{route('admin.doprofile')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                        <label>Nom Complet</label>
                                                        <input value="{{ $user->name }}" id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
                                                        @error('name')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Email</label>
                                                        <input value="{{ $user->email }}" id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror">
                                                        @error('email')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Profession</label>
                                                        <input value="{{ $user->profession }}" id="profession" name="profession" type="text" class="form-control @error('profession') is-invalid @enderror">
                                                        @error('profession')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Téléphone</label>
                                                        <input value="{{ $user->phone }}" id="phone" name="phone" type="number" class="form-control @error('phone') is-invalid @enderror">
                                                        @error('phone')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Addresse</label>
                                                        <input value="{{ $user->address }}" id="address" name="address" type="text" class="form-control @error('address') is-invalid @enderror">
                                                        @error('address')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Ville</label>
                                                        <input value="{{ $user->city }}" id="city" name="city" type="text" class="form-control @error('city') is-invalid @enderror">
                                                        @error('city')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Pays</label>
                                                        <input value="{{ $user->state }}" id="state" name="state" type="text" class="form-control @error('state') is-invalid @enderror">
                                                        @error('state')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Code Postal</label>
                                                        <input value="{{ $user->postal_code }}" id="postal_code" name="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror">
                                                        @error('postal_code')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group col-md-12">
                                                        <label>Description</label>
                                                        <textarea id="about" name="about" class="form-control @error('about') is-invalid @enderror"> {{ $user->about }} </textarea>
                                                        @error('about')
                                                            <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-submit">	
                                                        <h4>Réseaux Sociaux</h4>
                                                        <div class="submit-section">
                                                            <div class="row">
                                                            
                                                                <div class="form-group col-md-6">
                                                                    <label>Facebook</label>
                                                                    <input value="{{ $user->facebook }}" id="facebook" name="facebook" type="url" class="form-control @error('facebook') is-invalid @enderror">
                                                                    @error('facebook')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="form-group col-md-6">
                                                                    <label>Twitter</label>
                                                                    <input value="{{ $user->twitter }}" id="twitter" name="twitter" type="url" class="form-control @error('twitter') is-invalid @enderror">
                                                                    @error('twitter')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="form-group col-md-6">
                                                                    <label>Google</label>
                                                                    <input value="{{ $user->google }}" id="google" name="google" type="url" class="form-control @error('google') is-invalid @enderror">
                                                                    @error('google')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="form-group col-md-6">
                                                                    <label>LinkedIn</label>
                                                                    <input value="{{ $user->linkedin }}" id="linkedin" name="linkedin" type="url" class="form-control @error('linkedin') is-invalid @enderror">
                                                                    @error('linkedin')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="form-group col-lg-12 col-md-12">
                                                                    <button class="btn btn-primary px-5 rounded" type="submit">Sauvegarder</button>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>     
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->


@endsection