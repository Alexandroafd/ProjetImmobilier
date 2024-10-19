@extends('admin.layout')

@section('title', $option->exists ? "Editer une option" : "Créer une option")

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
												<!--<li><a href="{{ route('admin.doprofile') }}"><i class="fa-solid fa-address-card"></i>Mon Profil</a></li>-->
												<li><a href="{{route('admin.option.index')}}"><i class="fa-solid fa-building-circle-check"></i>Mes Options</a></li>
												<li class="active"><a href="{{ route('admin.option.create') }}"><i class="fa-solid fa-house"></i>Ajouter une Option</a></li>
												<!--<li><a href="{{route('admin.changePassword')}}"><i class="fa-solid fa-unlock"></i>Changer le mot de passe</a></li>-->
												<li><a href="{{ route('logout') }}"><i class="fa-solid fa-power-off"></i>Déconnexion</a></li>
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-12">
					
							<div class="dashboard-wraper">
								
								<div class="row">
									
									<!-- Submit Form -->
									<div class="col-lg-12 col-md-12">
									
										<div class="submit-pages">
											
											<!-- Basic Information -->
											<div class="form-submit">	
												<h3>Options</h3>
                                                <form method="post" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}">
                                                    @csrf
                                                    @method($option->exists ? 'put' : 'post')
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-12">
                                                                <label>Nom <span class="tip-topdata" data-tip="Property Title"><i class="fa-solid fa-info"></i></span></label>
                                                                <input id="name" name="name" value="{{ old('name', $option->name) }}" type="text" class="form-control @error('name') is-invalid @enderror">
                                                                @error('title')
                                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group col-lg-12 col-md-12">
                                                        <button class="btn btn-primary mt-3 px-5 rounded" type="submit">
                                                            @if ($option->exists) 
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
	

    {{--<div class="container">

        <h1>@yield('title')</h1>

        <form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}" method="post">

            @csrf
            @method($option->exists ? 'put' : 'post')

            <div class="row">
                @include('shared.input', [
                'label' => 'Nom',
                'name' => 'name',
                'value' => $option->name
                ])
            </div>

            <div>
                <button class="btn btn-primary">
                    @if ($option->exists)
                        Modifier
                    @else
                        Créer
                    @endif
                </button>
            </div>
        </form>
    </div>--}}
@endsection
