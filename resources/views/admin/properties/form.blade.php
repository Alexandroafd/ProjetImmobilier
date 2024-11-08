@extends('admin.layout')

@section('title', $property->exists ? "Editer un bien" : "Créer un bien")

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
												<li><a href="{{ route('admin.doprofile') }}"><i class="fa-solid fa-address-card"></i>Mon Profil</a></li>
												<li><a href="{{route('admin.bookmarked')}}"><i class="fa-solid fa-bookmark"></i>Liste des Favoris</a></li>
												<li><a href="{{ route('admin.property.index') }}"><i class="fa-solid fa-building-circle-check"></i>Mes Propriétés</a></li>
												<li class="active"><a href="{{ route('admin.property.create') }}"><i class="fa-solid fa-house"></i>Ajouter un Bien</a></li>
                                                <li><a href="{{route('admin.property.search')}}"><i class="fa-solid fa-gauge"></i>Rechercher un Bien</a></li>
												<li><a href="{{route('admin.changePassword')}}"><i class="fa-solid fa-unlock"></i>Changer le Mot de Passe</a></li>
												<li><a href="{{ route('logout') }}"><i class="fa-solid fa-power-off"></i>Déconnexion</a></li>
											</ul>
										</div>

									</div>
								</div>

							</div>
						</div>

						<div class="col-lg-9 col-md-12">

							{{--<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h4>Your Current Package: <span class="pc-title text-primary">Gold Package</span></h4>
								</div>
							</div>

							<div class="row">

								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-1">
										<div class="dashboard-stat-content"><h4>607</h4> <span>Listings Included</span></div>
										<div class="dashboard-stat-icon"><i class="fa-solid fa-location-dot"></i></div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-2">
										<div class="dashboard-stat-content"><h4>102</h4> <span>Listings Remaining</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-3">
										<div class="dashboard-stat-content"><h4>70</h4> <span>Featured Included</span></div>
										<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-4">
										<div class="dashboard-stat-content"><h4>30</h4> <span>Featured Remaining</span></div>
										<div class="dashboard-stat-icon"><i class="fa-solid fa-location-dot"></i></div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-5">
										<div class="dashboard-stat-content"><h4>Unlimited</h4> <span>Images / per listing</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-6">
										<div class="dashboard-stat-content"><h4>2021-02-26</h4> <span>Ends On</span></div>
										<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
									</div>
								</div>

							</div>--}}

							<div class="dashboard-wraper">

								<div class="row">

									<!-- Submit Form -->
									<div class="col-lg-12 col-md-12">

										<div class="submit-pages">

											<!-- Basic Information -->
											<div class="form-submit">
												<h3>Renseigner les informations sur la propriété</h3>
                                                <form method="post" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method($property->exists ? 'put' : 'post')
                                                    <div class="submit-section">
                                                        <div class="row">

                                                            <div class="form-group col-md-6">
                                                                <label>Nom de la Propriété<span class="tip-topdata" data-tip="Property Title"><i class="fa-solid fa-info"></i></span></label>
                                                                <input id="title" name="title" value="{{ old('title', $property->title) }}" type="text" class="form-control @error('title') is-invalid @enderror">
                                                                @error('title')
                                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Status</label>
                                                                <select value="{{ old('status', $property->status) }}" name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="sell" {{ old('status') == 'sell' ? 'selected' :  $property->status }}>A Vendre</option>
                                                                    <option value="rent" {{ old('status') == 'rent' ? 'selected' :  $property->status }}>A Louer</option>
                                                                </select>
                                                                @error('status')
                                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Prix</label>
                                                                <input value="{{ old('price', $property->price) }}" id="price" name="price" type="number" class="form-control @error('price') is-invalid @enderror" placeholder="USD">
                                                                @error('price')
                                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Type de propriété</label>
                                                                <input value="{{ old('type', $property->type) }}" id="type" name="type" type="text" class="form-control @error('type') is-invalid @enderror" placeholder="Appartement">
                                                                @error('type')
                                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Chambre</label>
                                                                <input value="{{ old('bedrooms', $property->bedrooms) }}" id="bedrooms" name="bedrooms" type="number" class="form-control @error('bedrooms') is-invalid @enderror">
                                                                @error('bedrooms')
                                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Etage</label>
                                                                <input value="{{ old('floor', $property->floor) }}" id="floor" name="floor" type="number" class="form-control @error('floor') is-invalid @enderror">
                                                                @error('floor')
                                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Pièces</label>
                                                                <input value="{{ old('rooms', $property->rooms) }}" id="rooms" name="rooms" type="number" class="form-control @error('rooms') is-invalid @enderror">
                                                                @error('rooms')
                                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Surface</label>
                                                                <input value="{{ old('surface', $property->surface) }}" id="surface" name="surface" type="number" class="form-control @error('surface') is-invalid @enderror" placeholder="mCarré">
                                                                @error('surface')
                                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- Gallery -->
                                                    <div class="form-submit">
                                                        <h3>Images</h3>
                                                        <div class="submit-section">
                                                            <div class="row">

                                                                <div class="form-group col-md-12">
                                                                    <label>Chargez vos photos</label>
                                                                        <div class="dz-default dz-message">
                                                                            <i class="ti-gallery"></i>
                                                                            <span>Mettez des images de votre propriété</span>
                                                                            <input id="images" name="images[]" type="file" class="form-control @error('images') is-invalid @enderror" multiple>
                                                                            @error('images')
                                                                                <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                            @enderror
                                                                        </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Location -->
                                                    <div class="form-submit">
                                                        <h3>Localisation</h3>
                                                        <div class="submit-section">
                                                            <div class="row">

                                                                <div class="form-group col-md-6">
                                                                    <label>Addresse</label>
                                                                    <input value="{{ old('address', $property->address) }}" id="address" name="address" type="text" class="form-control @error('address') is-invalid @enderror">
                                                                    @error('address')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label>Ville</label>
                                                                    <input value="{{ old('city', $property->city) }}" id="city" name="city" type="text" class="form-control @error('city') is-invalid @enderror">
                                                                    @error('city')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label>Pays</label>
                                                                    <input value="{{ old('state', $property->state) }}" id="state" name="state"  type="text" class="form-control @error('state') is-invalid @enderror">
                                                                    @error('state')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label>Code Postal</label>
                                                                    <input value="{{ old('postal_code', $property->postal_code) }}" id="postal_code" name="postal_code"  type="text" class="form-control @error('postal_code') is-invalid @enderror">
                                                                    @error('postal_code')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Detailed Information -->
                                                    <div class="form-submit">
                                                        <div class="submit-section">
                                                            <div class="row">

                                                                <div class="form-group col-md-12">
                                                                    <label>Description</label>
                                                                    <textarea id="description" name="description" class="form-control h-120 @error('description') is-invalid @enderror">{{ old('description', $property->description) }}</textarea>
                                                                    @error('description')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>

                                                                {{--<div class="form-group col-md-12">
                                                                    <label>Options</label>
                                                                    <input value="{{  $property->options()->pluck('id') }}" id="options" name="options" class="form-control @error('options') is-invalid @enderror" multiple = "true">
                                                                    @error('options')
                                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                    @enderror
                                                                </div>--}}

                                                                @include('shared.select', ['label' => 'Options', 'name' => 'options', 'value' => $property->options()->pluck('id'), 'multiple' => true])

                                                            </div>
                                                        </div>
                                                    </div>

                                                    @include('shared.checkbox', ['label' => 'Vendu', 'name' => 'sold', 'value' => $property->sold, 'options' => $options])

                                                    <div class="form-group col-lg-12 col-md-12">
                                                        <button class="btn btn-primary mt-3 px-5 rounded" type="submit">
                                                            @if ($property->exists)
                                                                Modifier
                                                            @else
                                                                Créer
                                                            @endif
                                                        </button>
                                                    </div>

                                                </form>
											</div>

										</div>
									</div>

								</div>

							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->


    {{--<h1>@yield('title')</h1>
    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input', ['class' =>'col', 'label' => 'Titre', 'name' => 'title', 'value' => $property->title])
        </div>
        <div class="col row">
            @include('shared.input', ['class' =>'col', 'label' => 'Surface', 'name' => 'surface', 'value' => $property->surface])
            @include('shared.input', ['class' =>'col', 'label' => 'Prix', 'name' => 'price', 'value' => $property->price])
        </div>
        @include('shared.input', ['type' =>'textarea','label' => 'Description', 'name' => 'description', 'value' => $property->description])
        <div class="row">
            @include('shared.input', ['class' =>'col', 'label' => 'Pièces', 'name' => 'rooms', 'value' => $property->rooms])
            @include('shared.input', ['class' =>'col', 'label' => 'Chambres', 'name' => 'bedrooms', 'value' => $property->bedrooms])
            @include('shared.input', ['class' =>'col', 'label' => 'Etage', 'name' => 'floor', 'value' => $property->floor])
        </div>
        <div class="row">
            @include('shared.input', ['class' =>'col', 'label' => 'Ville', 'name' => 'city', 'value' => $property->city])
            @include('shared.input', ['class' =>'col', 'label' => 'Adresse', 'name' => 'address', 'value' => $property->address])
            @include('shared.input', ['class' =>'col', 'label' => 'Code postal', 'name' => 'postal_code', 'value' => $property->postal_code])
        </div>
        @include('shared.select', ['label' => 'Options', 'name' => 'options', 'value' => $property->options()->pluck('id'), 'multiple' => true])
        @include('shared.checkbox', ['label' => 'Vendu', 'name' => 'sold', 'value' => $property->sold, 'options' => $options]),
        <div class="row">
            @include('shared.input', ['type' => 'file', 'id' => 'image', 'class' => 'col', 'label' => 'Photo', 'name' => 'image', 'value' => $property->image])
        </div>
        <div>
            <button class="btn btn-primary">
                @if ($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>
    </form>--}}
@endsection
