@extends('base')

@section('title', $property->title)

@section('content')

			<!-- ============================ Property Header Info Start================================== -->
			<section class="bg-title">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-12">
                            @include('shared.alert')
							<div class="property_block_wrap style-4">
								<div class="prt-detail-title-desc">
									<span class="label text-light bg-warning mb-1 d-inline-flex"> 
                                        
                                        @if ($property->status == 'rent')
                                        A Louer
                                        @else
                                        A Vendre                                            
                                        @endif 

                                    </span>
									<h3 class="text-light"> {{$property->title}} </h3>
									<span><i class="lni-map-marker"></i> {{$property->postal_code}}; {{$property->address}}; {{$property->city}} </span>
									<h3 class="prt-price-fix text-light">$ {{ number_format($property->price, thousands_separator: ' ')}}</h3>
									<div class="pbwts-social">
										<ul>
											<li>Partagez:</li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Property Header Info Start================================== -->

			<!-- ============================ Property Detail Start ================================== -->
			<section class="gray-simple">
				<div class="container">
					<div class="row">

						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							@include('shared.alert')
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">

								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false"><h4 class="property_block_title">Détails & Caractéristiques</h4></a>
								</div>
								<div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
									<div class="block-body">
										<ul class="deatil_features">
											<li><strong>Chambres:</strong> {{$property->bedrooms}} </li>
											<li><strong>Pièces:</strong>{{$property->rooms}} </li>
											<li><strong>Surface:</strong>{{$property->surface}} mCarré</li>
											<li><strong>Type de Propriété:</strong>{{$property->type}} </li>
                                            <li><strong>Etage:</strong>{{ $property->floor ?: 'Rez de chaussé' }}</li>
											<li><strong>Statut:</strong>
                                                @if ($property->sold == 0)
                                                    Disponible
                                                @else
                                                    Non Disponible
                                                @endif
                                            </li>
										</ul>
									</div>
								</div>

							</div>

							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">

								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Description</h4></a>
								</div>
								<div id="clTwo" class="panel-collapse collapse show">
									<div class="block-body">
										<p>{!! nl2br($property->description) !!}</p>
									</div>
								</div>
							</div>

							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">

								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#amen"  data-bs-target="#clThree" aria-controls="clThree" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Options</h4></a>
								</div>

								<div id="clThree" class="panel-collapse collapse show">
									<div class="block-body">
                                        @foreach ($options as $option)
                                            <ul class="avl-features third color">
                                                <li> {{$option->name}} </li>
                                            </ul>
                                        @endforeach
									</div>
								</div>
							</div>

							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">

								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#clSev"  data-bs-target="#clSev" aria-controls="clOne" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Gallery</h4></a>
								</div>

								<div id="clSev" class="panel-collapse collapse">
									<div class="block-body">
										<ul class="list-gallery-inline">
											<!--<li>
												<a href="assets/img/p-1.jpg" class="mfp-gallery"><img src="assets/img/p-1.jpg" class="img-fluid mx-auto" alt="" /></a>
											</li>-->

                                                @if ($property->images)
                                                    @php
                                                        $images = json_decode($property->images, true);
                                                    @endphp
                                                    @if (is_array($images))
                                                        @foreach ($images as $image)
                                                            <a href="{{ asset('profil_pic/' . $image) }}"><img src="{{ asset('profil_pic/' . $image) }}" alt="photo" style="width: 100%; height: auto;" ></a>
                                                        @endforeach
                                                    @else
                                                        <p>Aucune image disponible.</p>
                                                    @endif
                                                @else
                                                    <p>Aucune image disponible.</p>
                                                @endif

										</ul>
									</div>
								</div>

							</div>

						</div>

						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">

							<!-- Like And Share -->
							<!--<div class="like_share_wrap b-0">
								<ul class="like_share_list">
									<li><a href="JavaScript:Void(0);" class="btn btn-likes" data-toggle="tooltip" data-original-title="Share"><i class="fas fa-share"></i>Share</a></li>
									<li><a href="JavaScript:Void(0);" class="btn btn-likes" data-toggle="tooltip" data-original-title="Save"><i class="fas fa-heart"></i>Save</a></li>
								</ul>
							</div>-->

							<div class="details-sidebar">

								<!-- Agent Detail -->
								<div class="sides-widget">
									<div class="sides-widget-header bg-primary">
										<div class="agent-photo"><img src="{{asset('assets/img/user-6.png')}}" alt=""></div>
										<div class="sides-widget-details">
											<h4><a href="#">Nous Contacter</a></h4>
											<span><i class="lni-phone-handset"></i>(229) 123 456 78</span>
										</div>
										<div class="clearfix"></div>
									</div>

									<form method="post" action="{{ route('property.contact', $property) }}">
                                        @csrf
                                        <div class="sides-widget-body simple-form">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input value="{{old('email')}}" type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Votre Email">
                                                @error('email')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Téléphone</label>
                                                <input value="{{old('phone')}}" type="numeric" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Votre Numéro">
                                                @error('phone')
                                                    <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Méssage</label>
                                                <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror">Je suis intérressé.</textarea>
                                            </div>
                                            @if (Auth::check())
                                                <button class="btn btn-light-primary fw-medium rounded full-width">Envoyer un Message</button>
                                            @else
                                                <a href="{{route('login')}}"><button class="btn btn-light-primary fw-medium rounded full-width">Connectez-vous d'abord</button></a>
                                            @endif
                                        </div>
                                    </form>
								</div>

								<!-- Mortgage Calculator -->
								{{--<div class="sides-widget">

									<div class="sides-widget-header bg-primary">
										<div class="sides-widget-details">
											<h4>Mortgage Calculator</h4>
											<span>View your Interest Rate</span>
										</div>
										<div class="clearfix"></div>
									</div>

									<div class="sides-widget-body simple-form">
										<div class="form-group">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Sale Price">
												<i class="fa-solid fa-sack-dollar"></i>
											</div>
										</div>

										<div class="form-group">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Down Payment">
												<i class="fa-solid fa-piggy-bank"></i>
											</div>
										</div>

										<div class="form-group">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Loan Term (Years)">
												<i class="fa-regular fa-calendar-days"></i>
											</div>
										</div>

										<div class="form-group">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Interest Rate">
												<i class="fa fa-percent"></i>
											</div>
										</div>

										<button class="btn btn-light-primary fw-medium rounded full-width">Calculate</button>

									</div>
								</div>

								<!-- Featured Property -->
								<div class="sidebar-widgets">

									<h4>Featured Property</h4>

									<div class="sidebar_featured_property">

										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="assets/img/p-1.jpg" class="img-fluid" alt="">
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="single-property-1.html">Loss vengel New Apartment</a></h4>
												<span><i class="fa-solid fa-location-dot"></i>Sans Fransico</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
														<div class="property_types_vlix sale">For Sale</div>
													</div>
													<div class="lists_property_price_value">
														<h4>$4,240</h4>
													</div>
												</div>
											</div>
										</div>

										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="assets/img/p-4.jpg" class="img-fluid" alt="">
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="single-property-1.html">Montreal Quriqe Apartment</a></h4>
												<span><i class="fa-solid fa-location-dot"></i>Liverpool, London</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
														<div class="property_types_vlix">For Rent</div>
													</div>
													<div class="lists_property_price_value">
														<h4>$7,380</h4>
													</div>
												</div>
											</div>
										</div>

										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="assets/img/p-7.jpg" class="img-fluid" alt="">
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="single-property-1.html">Curmic Studio For Office</a></h4>
												<span><i class="fa-solid fa-location-dot"></i>Montreal, Canada</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
														<div class="property_types_vlix buy">For Buy</div>
													</div>
													<div class="lists_property_price_value">
														<h4>$8,730</h4>
													</div>
												</div>
											</div>
										</div>

										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="assets/img/p-5.jpg" class="img-fluid" alt="">
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="single-property-1.html">Montreal Quebec City</a></h4>
												<span><i class="fa-solid fa-location-dot"></i>Sreek View, New York</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
														<div class="property_types_vlix">For Rent</div>
													</div>
													<div class="lists_property_price_value">
														<h4>$6,240</h4>
													</div>
												</div>
											</div>
										</div>

									</div>

								</div>--}}

							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- ============================ Property Detail End ================================== -->

<!--<div class="container mt-4">
    <h1>{{ $property->title }}</h1>
    <h2>{{ $property->rooms }}pièces - {{ $property->surface }}mCarré</h2>

    <div class="text-primary fw-bold" style="font-size: 4rem;">
        {{ number_format($property->price, thousands_separator: ' ') }} euro
    </div>

    <hr>

    <div class="mt-4">
        <h4>Intéressé par ce bien ?</h4>

        @if (Session::has('success'))
        <div class="bg-success py-4 mb-4 rounded">
            <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('success') }} </p>
        </div>
        @endif

        @if (Session::has('error'))
        <div class="bg-danger py-4 mb-4 rounded">
            <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('error') }} </p>
        </div>
        @endif

        <form action="{{ route('property.contact', $property) }}" method="post" class="vstack gap-3">
            @csrf
            <div class="row">
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Nom',
                    'name' => 'lastname',
                    'value' => 'John'
                    ])
                @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Prénom',
                        'name' => 'firstname',
                        'value' => 'Doe'
                        ])
            </div>
            <div class="row">
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Téléphone',
                    'name' => 'phone',
                    'value' => '06 00 00 00 00'
                    ])
                @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Email',
                        'name' => 'email',
                        'value' => 'john@doepublic.fr'
                        ])
            </div>
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Votre message',
                'name' => 'message',
                'value' => 'Mon petit message'
                ])
            <div>
                <button class="btn btn-primary">Nous contacter</button>
            </div>
        </form>
    </div>

    <div class="mt-4">
        <p>{!! nl2br($property->description) !!}</p>
        <div class="row">
            <div class="col-8">
                <h2>Caractéristiques</h2>
                <table class="table table-striped">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ $property->surface }}</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ $property->rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ $property->bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ $property->floor ?: 'Rez de chaussé' }}</td>
                    </tr>
                    <tr>
                        <td>Localisation</td>
                        <td>
                            {{ $property->address }} <br/>
                            {{ $property->city }} ({{ $property->postal_code }})
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <h2>Spécificités</h2>
                <ul class="list-group">
                    @foreach ($property->options as $option)
                    <li class="list-group-items">{{ $option->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>-->
@endsection
