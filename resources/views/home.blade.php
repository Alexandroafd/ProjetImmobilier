@extends('base')

@section('content')

            <!-- ============================ Hero Banner  Start================================== -->
			<div class="image-bottom hero-banner" style="background:#2540a2 url(assets/img/new-banner.jpg) no-repeat;" data-overlay="7">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-9 col-md-11 col-sm-12">
							<div class="inner-banner-text text-center">
								<p class="lead-i">Amet consectetur adipisicing <span class="badge badge-success">New</span></p>
								<h2><span class="font-normal">Trouver la maison</span> qui vous convient.</h2>
							</div>
							{{--<div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard mt-5">
								<div class="hero-search-content">
									<div class="row">

										<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 b-r">
											<div class="form-group">
												<div class="choose-propert-type">
													<ul>
														<li>
															<div class="form-check">
																<input class="form-check-input" type="radio" id="typbuy" name="typeprt">
																<label class="form-check-label" for="typbuy">
																	For Buy
																</label>
															</div>
														</li>
														<li>
															<div class="form-check">
																<input class="form-check-input" type="radio" id="typrent" name="typeprt" checked>
																<label class="form-check-label" for="typrent">
																	For Rent
																</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="col-xl-6 col-lg-6 col-md-4 col-sm-10 p-md-0 elio">
											<div class="form-group border-start borders">
												<div class="position-relative">
													<input type="text" class="form-control border-0 ps-5" placeholder="Search for a location">
													<div class="position-absolute top-50 start-0 translate-middle-y ms-2">
														<span class="svg-icon text-primary svg-icon-2hx">
															<svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"/>
																<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"/>
															</svg>
														</span>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xl-1 col-lg-1 col-md-1 col-sm-2">
											<div class="form-group">
												<a class="collapsed ad-search" data-bs-toggle="collapse" data-bs-parent="#search" data-bs-target="#advance-search" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h"></i></a>
											</div>
										</div>

										<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
											<div class="form-group">
												<button type="button" class="btn btn-dark full-width">Search</button>
											</div>
										</div>

									</div>
									<!-- Collapse Advance Search Form -->
									<div class="collapse" id="advance-search" aria-expanded="false" role="banner">

										<!-- row -->
										<div class="row">

											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group mb-2">
													<div class="input-with-icon">
														<select id="town" class="form-control">
															<option value="">&nbsp;</option>
															<option value="1">Any Town</option>
															<option value="2">Toronto</option>
															<option value="3">Montreal</option>
															<option value="4">Alberta</option>
															<option value="5">Ontario</option>
															<option value="6">Ottawa</option>
														</select>
														<i class="fa-solid fa-location-dot"></i>
													</div>
												</div>
											</div>

											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group mb-2">
													<div class="input-with-icon">
														<select id="bedrooms" class="form-control">
															<option value="">&nbsp;</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
														<i class="fas fa-bed"></i>
													</div>
												</div>
											</div>

											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group mb-2">
													<div class="input-with-icon">
														<select id="bathrooms" class="form-control">
															<option value="">&nbsp;</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
														<i class="fas fa-bath"></i>
													</div>
												</div>
											</div>

										</div>
										<!-- /row -->

										<!-- row -->
										<div class="row">

											<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
												<h4 class="text-dark">Amenities & Features</h4>
												<ul class="no-ul-list third-row">
													<li>
														<input id="a-1" class="form-check-input" name="a-1" type="checkbox">
														<label for="a-1" class="form-check-label">Air Condition</label>
													</li>
													<li>
														<input id="a-2" class="form-check-input" name="a-2" type="checkbox">
														<label for="a-2" class="form-check-label">Bedding</label>
													</li>
													<li>
														<input id="a-3" class="form-check-input" name="a-3" type="checkbox">
														<label for="a-3" class="form-check-label">Heating</label>
													</li>
													<li>
														<input id="a-4" class="form-check-input" name="a-4" type="checkbox">
														<label for="a-4" class="form-check-label">Internet</label>
													</li>
													<li>
														<input id="a-5" class="form-check-input" name="a-5" type="checkbox">
														<label for="a-5" class="form-check-label">Microwave</label>
													</li>
													<li>
														<input id="a-6" class="form-check-input" name="a-6" type="checkbox">
														<label for="a-6" class="form-check-label">Smoking Allow</label>
													</li>
													<li>
														<input id="a-7" class="form-check-input" name="a-7" type="checkbox">
														<label for="a-7" class="form-check-label">Terrace</label>
													</li>
													<li>
														<input id="a-8" class="form-check-input" name="a-8" type="checkbox">
														<label for="a-8" class="form-check-label">Balcony</label>
													</li>
													<li>
														<input id="a-9" class="form-check-input" name="a-9" type="checkbox">
														<label for="a-9" class="form-check-label">Icon</label>
													</li>
													<li>
														<input id="a-10" class="form-check-input" name="a-10" type="checkbox">
														<label for="a-10" class="form-check-label">Wi-Fi</label>
													</li>
													<li>
														<input id="a-11" class="form-check-input" name="a-11" type="checkbox">
														<label for="a-11" class="form-check-label">Beach</label>
													</li>
													<li>
														<input id="a-12" class="form-check-input" name="a-12" type="checkbox">
														<label for="a-12" class="form-check-label">Parking</label>
													</li>
												</ul>
											</div>

										</div>
										<!-- /row -->

									</div>
								</div>
							</div>--}}

						</div>
					</div>
				</div>
			</div>
			<!-- ==================================== Hero Banner End ======================================== -->

			<!-- ============================ Step How To Use Start ================================== -->
			<section>
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Comment ça marche?</h2>
								<p>Acheter ou louer une Maison rapidement en trois étapes...</p>
							</div>
						</div>
					</div>

					<div class="row justify-content-center g-4">
						<div class="col-lg-4 col-md-4">
							<div class="middle-icon-features-item">
								<div class="icon-features-wrap">
									<div class="middle-icon-large-features-box f-light-success">
										<span class="svg-icon text-success svg-icon-2hx"><svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M13.0021 10.9128V3.01281C13.0021 2.41281 13.5021 1.91281 14.1021 2.01281C16.1021 2.21281 17.9021 3.11284 19.3021 4.61284C20.7021 6.01284 21.6021 7.91285 21.9021 9.81285C22.0021 10.4129 21.5021 10.9128 20.9021 10.9128H13.0021Z" fill="currentColor"/>
												<path opacity="0.3" d="M11.0021 13.7128V4.91283C11.0021 4.31283 10.5021 3.81283 9.90208 3.91283C5.40208 4.51283 1.90209 8.41284 2.00209 13.1128C2.10209 18.0128 6.40208 22.0128 11.3021 21.9128C13.1021 21.8128 14.7021 21.3128 16.0021 20.4128C16.5021 20.1128 16.6021 19.3128 16.1021 18.9128L11.0021 13.7128Z" fill="currentColor"/>
												<path opacity="0.3" d="M21.9021 14.0128C21.7021 15.6128 21.1021 17.1128 20.1021 18.4128C19.7021 18.9128 19.0021 18.9128 18.6021 18.5128L13.0021 12.9128H20.9021C21.5021 12.9128 22.0021 13.4128 21.9021 14.0128Z" fill="currentColor"/>
											</svg>
										</span>
									</div>
								</div>
								<div class="middle-icon-features-content">
									<h4>Evaluer la Propriété</h4>
									<p>Rechercher et Trouver la maison qui correspond à votre budget.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="middle-icon-features-item">
								<div class="icon-features-wrap">
									<div class="middle-icon-large-features-box f-light-warning">
										<span class="svg-icon text-warning svg-icon-2hx">
											<svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="currentColor"/>
												<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor"/>
												<path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="currentColor"/>
												<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor"/>
											</svg>
										</span>
									</div>
								</div>
								<div class="middle-icon-features-content">
									<h4>Trouver un Agent</h4>
									<p>L'agent joue le role d'intermédiaire entre le propriétaire et vous afin de vous proposer les meilleures options et de faciliter l'achat plus rapidement.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="middle-icon-features-item remove">
								<div class="icon-features-wrap">
									<div class="middle-icon-large-features-box f-light-purple">
										<span class="svg-icon text-purple svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 24 24">
												<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"/>
												<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"/>
											</svg>
										</span>
									</div>
								</div>
								<div class="middle-icon-features-content">
									<h4>Conclure l'affaire</h4>
									<p>Finalisez le deal et devenez propriétaire.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Step How To Use End ====================== -->


			<!-- ========================= Explore Property ========================== -->
			<section class="bg-light">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Récentes Propriétés</h2>
								<p>Nouvelles propriétés en vedette !</p>
							</div>
						</div>
					</div>

				    <div class="row justify-content-center g-4">
						@if ($properties->isNotEmpty())
                            @foreach ($properties as $property)
                                <!-- Single Property -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <div class="property-listing card border-0 rounded-3">

                                        <div class="listing-img-wrapper p-3">
                                            <div class="list-img-slide position-relative">
                                                <div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
                                                    <div class="label bg-success text-light d-inline-flex align-items-center justify-content-center">
                                                        <span class="svg-icon text-light svg-icon-2hx me-1">
                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
                                                                <path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        @if ($property->sold == 0)
                                                            Disponible
                                                        @else
                                                            Non Disponible
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="click rounded-3 overflow-hidden mb-0">
                                                    <div>
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
                                                        <!--<a href="single-property-1.html"><img src="assets/img/p-1.jpg" class="img-fluid" alt="" /></a>-->
                                                    </div>
                                                    <!--<div><a href="single-property-1.html"><img src="assets/img/p-9.jpg" class="img-fluid" alt="" /></a></div>
                                                    <div><a href="single-property-1.html"><img src="assets/img/p-10.jpg" class="img-fluid" alt="" /></a></div>-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-caption-wrapper px-3">
                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail-wrap">
                                                    <div class="listing-short-detail">
                                                        <div class="d-flex align-items-center">
                                                            @if ($property->status == "rent")
                                                                <span class="label bg-light-success text-success prt-type me-2"> A Louer </span><span class="label bg-light-purple text-purple property-cats">{{$property->type}}</span>
                                                            @else
                                                                <span class="label bg-light-danger text-danger prt-type me-2"> A Vendre </span><span class="label bg-light-purple text-purple property-cats">{{$property->type}}</span>
                                                            @endif
                                                        </div>
                                                        <h4 class="listing-name fw-semibold fs-5 mb-1"><a href="{{route('property.show', ['slug' => $property->getSlug(), 'property' => $property])}}"> {{$property->title}} </a></h4>
                                                        <div class="prt-location text-muted-2">
                                                            <span class="svg-icon svg-icon-2hx">
                                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"/>
                                                                    <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                            {{$property->city}} , {{$property->state}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="price-features-wrapper">
                                                <div class="list-fx-features d-flex align-items-center justify-content-between">
                                                    <div class="listing-card d-flex align-items-center">
                                                        <div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm"> {{$property->floor}} </span>
                                                    </div>
                                                    <div class="listing-card d-flex align-items-center">
                                                        <div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">{{$property->rooms}} </span>
                                                    </div>
                                                    <div class="listing-card d-flex align-items-center">
                                                        <div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">{{$property->surface}} mCarré</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-footer d-flex align-items-center justify-content-between py-4">
                                                <div class="listing-short-detail-flex">
                                                    <h6 class="listing-card-info-price m-0">${{ number_format($property->price, thousands_separator: ' ') }} </h6>
                                                </div>
                                                <div class="footer-flex">
                                                    <a href="{{route('property.show', ['slug' => $property->getSlug(), 'property' => $property])}}" class="prt-view">
                                                        <span class="svg-icon text-primary svg-icon-2hx">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="currentColor"/>
                                                                <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- End Single Property -->
                            @endforeach
                        @endif
				    </div>

					<div class="row align-items-center justify-content-center">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
							<a href="{{route('property.index')}}" class="btn btn-primary px-md-5 rounded">Voir Plus</a>
						</div>
					</div>

				</div>
			</section>
			<!-- ================================= Explore Property =============================== -->


			<!-- ============================ Property Location Start ================================== -->
			<!--<section>
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Find Best Locations</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

					<div class="row justify-content-center g-xl-4 g-md-3 g-4">

						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
							<div class="location-property-wrap rounded-4 p-2">
								<div class="location-property-thumb rounded-4">
									<a href="listings-list-with-sidebar.html"><img src="assets/img/c-1.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">San Francisco, California</h4>
										<span class="text-muted-2">95 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="text-primary">
											<span class="svg-icon svg-icon-2hx">
												<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
													<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
							<div class="location-property-wrap rounded-4 p-2">
								<div class="location-property-thumb rounded-4">
									<a href="listings-list-with-sidebar.html"><img src="assets/img/c-2.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Dunao, California</h4>
										<span class="text-muted-2">95 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="text-primary">
											<span class="svg-icon svg-icon-2hx">
												<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
													<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
							<div class="location-property-wrap rounded-4 p-2">
								<div class="location-property-thumb rounded-4">
									<a href="listings-list-with-sidebar.html"><img src="assets/img/c-3.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Liverpool, London</h4>
										<span class="text-muted-2">95 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="text-primary">
											<span class="svg-icon svg-icon-2hx">
												<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
													<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
							<div class="location-property-wrap rounded-4 p-2">
								<div class="location-property-thumb rounded-4">
									<a href="listings-list-with-sidebar.html"><img src="assets/img/c-4.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">San Francisco, New York</h4>
										<span class="text-muted-2">95 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="text-primary">
											<span class="svg-icon svg-icon-2hx">
												<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
													<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
							<div class="location-property-wrap rounded-4 p-2">
								<div class="location-property-thumb rounded-4">
									<a href="listings-list-with-sidebar.html"><img src="assets/img/c-5.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">New Orleans, Louisiana</h4>
										<span class="text-muted-2">95 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="text-primary">
											<span class="svg-icon svg-icon-2hx">
												<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
													<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
							<div class="location-property-wrap rounded-4 p-2">
								<div class="location-property-thumb rounded-4">
									<a href="listings-list-with-sidebar.html"><img src="assets/img/c-6.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Los Angeles</h4>
										<span class="text-muted-2">95 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="text-primary">
											<span class="svg-icon svg-icon-2hx">
												<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
													<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
							<div class="location-property-wrap rounded-4 p-2">
								<div class="location-property-thumb rounded-4">
									<a href="listings-list-with-sidebar.html"><img src="assets/img/c-7.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Dubai, UAE</h4>
										<span class="text-muted-2">18 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="text-primary">
											<span class="svg-icon svg-icon-2hx">
												<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
													<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
							<div class="location-property-wrap rounded-4 p-2">
								<div class="location-property-thumb rounded-4">
									<a href="listings-list-with-sidebar.html"><img src="assets/img/c-8.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Dhaka, UAE</h4>
										<span class="text-muted-2">26 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="text-primary">
											<span class="svg-icon svg-icon-2hx">
												<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
													<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
							<a href="listings-list-with-sidebar.html" class="btn btn-primary px-md-5 rounded">Browse More Locations</a>
						</div>
					</div>

				</div>
			</section>-->
			<!-- ============================ Property Location End ================================== -->


			<!-- ============================ Smart Testimonials ================================== -->
			<section class="gray">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Retour de nos utilisateurs</h2>
								<p></p>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">

						<div class="col-lg-12 col-md-12">

							<div class="smart-textimonials smart-center" id="smart-textimonials">

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-primary"><i class="fa-solid fa-quote-left"></i></div>
													<img src="{{asset('assets/img/user-3.png')}}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken specimens.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Adam Williams</h4>
											<span class="st-author-subtitle">CEO Of Microwoft</span>
										</div>
									</div>
								</div>

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-success"><i class="fa-solid fa-quote-left"></i></div>
													<img src="{{asset('assets/img/user-8.png')}}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken specimens.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Retha Deowalim</h4>
											<span class="st-author-subtitle">CEO Of Apple</span>
										</div>
									</div>
								</div>

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-purple"><i class="fa-solid fa-quote-left"></i></div>
													<img src="{{asset('assets/img/user-4.png')}}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken specimens.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Sam J. Wasim</h4>
											<span class="st-author-subtitle">Pio Founder</span>
										</div>
									</div>
								</div>

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-seegreen"><i class="fa-solid fa-quote-left"></i></div>
													<img src="{{asset('assets/img/user-5.png')}}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken specimens.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Usan Gulwarm</h4>
											<span class="st-author-subtitle">CEO Of Facewarm</span>
										</div>
									</div>
								</div>

								<!-- Single Item -->
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-danger"><i class="fa-solid fa-quote-left"></i></div>
													<img src="{{asset('assets/img/user-6.png')}}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>

										<div class="smart-tes-content">
											<p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken specimens.</p>
										</div>

										<div class="st-author-info">
											<h4 class="st-author-title">Shilpa Shethy</h4>
											<span class="st-author-subtitle">CEO Of Zapple</span>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- ============================ Smart Testimonials End ================================== -->

			<!-- ============================ Price Table Start ================================== -->
			<!--<section>
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>See our packages</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center justify-content-center g-lg-4 g-md-3 g-4">

						<div class="col-xl-4 col-lg-4 col-md-4">
							<div class="pricing-wrap py-3 px-3">

								<div class="pricing-header bg-dark">
									<h4 class="pr-value text-light"><sup class="text-light opacity-75">$</sup>49</h4>
									<h4 class="pr-title text-info">Basic Package</h4>
								</div>
								<div class="pricing-body px-2">
									<ul class="p-0">
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>5+ Listings</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>Contact With Agent</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>3 Month Validity</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>7x24 Fully Support</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>50GB Space</li>
									</ul>
								</div>
								<div class="pricing-bottom mt-5 mb-1 px-2">
									<a href="#" class="btn btn-light-primary rounded full-width">Choose Plan</a>
								</div>

							</div>
						</div>

						<div class="col-xl-4 col-lg-4 col-md-4">
							<div class="pricing-wrap py-3 px-3">

								<div class="pricing-header bg-primary">
									<h4 class="pr-value text-light"><sup class="text-light opacity-75">$</sup>99</h4>
									<h4 class="pr-title text-light">PLATINUM PACKAGE</h4>
								</div>
								<div class="pricing-body px-2">
									<ul class="p-0">
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>5+ Listings</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>Contact With Agent</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>3 Month Validity</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>7x24 Fully Support</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>50GB Space</li>
									</ul>
								</div>
								<div class="pricing-bottom mt-5 mb-1 px-2">
									<a href="#" class="btn btn-dark rounded full-width">Choose Plan</a>
								</div>

							</div>
						</div>

						<div class="col-xl-4 col-lg-4 col-md-4">
							<div class="pricing-wrap py-3 px-3">

								<div class="pricing-header bg-dark">
									<h4 class="pr-value text-light"><sup class="text-light opacity-75">$</sup>199</h4>
									<h4 class="pr-title text-info">STANDARD PACKAGE</h4>
								</div>
								<div class="pricing-body px-2">
									<ul class="p-0">
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>5+ Listings</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>Contact With Agent</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>3 Month Validity</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>7x24 Fully Support</li>
										<li><span class="text-success me-2"><i class="fa-solid fa-circle-check"></i></span>50GB Space</li>
									</ul>
								</div>
								<div class="pricing-bottom mt-5 mb-1 px-2">
									<a href="#" class="btn btn-light-primary rounded full-width">Choose Plan</a>
								</div>

							</div>
						</div>

					</div>

				</div>
			</section>-->
			<!-- ============================ Price Table End ================================== -->

    {{--<div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence Immobilière</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nihil deleniti aliquid hic enim commodi ullam. Repudiandae minus doloremque est unde inventore porro reiciendis nisi, aspernatur velit. Est, illum sequi?</p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
            <div class="col-3 mb-4">
                @include('property.card')
            </div>
            @endforeach
        </div>
    </div>--}}
@endsection
