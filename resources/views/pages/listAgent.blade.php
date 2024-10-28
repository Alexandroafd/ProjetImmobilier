@extends('base')

@section('title', 'Liste des Agents')

@section('content')

    		<!-- ============================ Page Title Start================================== -->
			<section class="bg-primary position-relative">
				<div class="position-absolute start-0 top-0 w-25 h-15 bg-light rounded-end-pill opacity-25 mt-4"></div>
				<div class="position-absolute start-0 bottom-0 w-15 h-20 bg-light rounded-top-pill opacity-25 ms-4"></div>
				<div class="position-absolute end-0 top-0 w-15 h-25 bg-light rounded-bottom-pill opacity-25 me-4"></div>
				<div class="position-absolute end-0 bottom-0 w-25 h-15 bg-light rounded-start-pill opacity-25 mb-4"></div>
				<div class="ht-30"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title text-light">All Agents</h2>
							<span class="ipn-subtitle">Lists of our all expert agents</span>
							
						</div>
					</div>
				</div>
				<div class="ht-30"></div>
			</section>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Search Form End ================================== -->
			<section class="gray-simple p-0">
				<div class="container">
					<!-- row Start -->
					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-12">
							<div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard overlio-40">
								<div class="hero-search-content">
									<div class="row">

										<div class="col-lg-10 col-md-9 col-sm-12">
											<div class="form-group">
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
										
										<div class="col-lg-2 col-md-3 col-sm-12">
											<div class="form-group">
												<a href="#" class="btn btn-dark full-width">Search</a>
											</div>
										</div>
												
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
			</section>
			<!-- ============================ Search Form End ================================== -->
			
			<!-- ============================ Agent List Start ================================== -->
			<section class="gray-simple">
				<div class="container">
				
					<div class="row justify-content-center g-4">
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-1.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">James N. Green</a></h5>
											<span class="agent-property text-muted-2">117 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(42 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-2.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Seema Gauranki</a></h5>
											<span class="agent-property text-muted-2">46 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(33 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-3.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Adam Walcorn</a></h5>
											<span class="agent-property text-muted-2">38 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(16 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-4.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Jasmin Khatri</a></h5>
											<span class="agent-property text-muted-2">51 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(28 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-5.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Rudra K. Mathan</a></h5>
											<span class="agent-property text-muted-2">75 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(52 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-6.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Niharika Muthurk</a></h5>
											<span class="agent-property text-muted-2">15 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(46 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-7.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Grack Chappel</a></h5>
											<span class="agent-property text-muted-2">17 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(102 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-8.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Nikita Rajaswi</a></h5>
											<span class="agent-property text-muted-2">62 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(18 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-5.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Rudra K. Mathan</a></h5>
											<span class="agent-property text-muted-2">75 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(52 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-6.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Niharika Muthurk</a></h5>
											<span class="agent-property text-muted-2">15 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(46 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-7.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Grack Chappel</a></h5>
											<span class="agent-property text-muted-2">17 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(102 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agent-page.html" class="d-inline-flex p-1 circle border">
											<img src="assets/img/user-8.png" class="img-fluid circle" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name mb-0"><a href="#">Nikita Rajaswi</a></h5>
											<span class="agent-property text-muted-2">62 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<div class="fr-grid-sder">
										<ul class="p-0">
											<li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
											<li>
												<div class="fr-can-rating">
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-warning"></i>
													<i class="fas fa-star fs-xs text-muted"></i>
													<span class="reviews_text fs-sm text-muted-2">(18 Reviews)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="fr-grid-deatil-flex-right">
										<div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
					
					<!-- Pagination -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
							<a href="listings-list-with-sidebar.html" class="btn btn-primary px-lg-5 rounded">Explore More Agents</a>
						</div>
					</div>
					
				</div>	
			</section>
			<!-- ============================ Agent List End ================================== -->
			

@endsection