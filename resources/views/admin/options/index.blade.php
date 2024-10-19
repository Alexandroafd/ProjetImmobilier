@extends('admin.layout')

@section('title', 'Toutes les options')

@section('content')

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
												<!--<li><a href="{{ route('admin.doprofile') }}"><i class="fa-solid fa-address-card"></i>Mon Profil</a></li>-->
												<li class="active"><a href="{{route('admin.option.index')}}"><i class="fa-solid fa-building-circle-check"></i>Mes Options</a></li>
												<li><a href="{{ route('admin.option.create') }}"><i class="fa-solid fa-house"></i>Ajouter une Option</a></li>
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
							
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>Mes Options</h4>
								</div>
								
								<div class="row">
								
                                    @foreach ($options as $option)
                                        <!-- Single Property -->
                                        <div class="col-md-12 col-sm-12 col-md-12">
                                            <div class="singles-dashboard-list">
                                                <div class="sd-list-left">
                                                    <img src="{{--asset('assets/img/p-3.jpg')--}}" class="img-fluid" alt="" />
                                                </div>
                                                <div class="sd-list-right">
                                                    <h4 class="listing_dashboard_title"><a href="#" class="text-primary"> {{$option->name}} </a></h4>
                                                    {{--<div class="user_dashboard_listed">
                                                        Price: from $ 154 month
                                                    </div>
                                                    <div class="user_dashboard_listed">
                                                        Listed in <a href="javascript:void(0);" class="text-primary">Rentals</a> and <a href="javascript:void(0);" class="text-primary">Apartments</a>
                                                    </div>
                                                    <div class="user_dashboard_listed">
                                                        City: <a href="javascript:void(0);" class="text-primary">KASIA</a> , Area:540 sq ft
                                                    </div>--}}
                                                    <div class="action justify-content-end">
                                                        <a href="{{route('admin.option.edit', $option)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="{{route('admin.option.destroy', $option)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer" class="delete"><i class="fa-regular fa-circle-xmark"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
									{{ $options->links() }}
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			

{{--<div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{route('admin.option.create')}}" class="btn btn-primary">Ajouter une option</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($options as $option)
                <tr>
                    <td>{{ $option->name }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.option.edit', $option) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.option.destroy', $option) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$options->links()}}--}}
@endsection