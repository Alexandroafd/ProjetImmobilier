@extends('base')

@section('title', 'Liste des Agences')

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
							
							<h2 class="ipt-title text-light">All Agency</h2>
							<span class="ipn-subtitle">Lists of our all Popular agencies</span>
							
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
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-7.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">5 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Green villa</a></h5>
											<span class="agent-property text-muted-2">117 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-7.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">4 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Modern house</a></h5>
											<span class="agent-property text-muted-2">76 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-5.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">3 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Royal Estate</a></h5>
											<span class="agent-property text-muted-2">53 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-4.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">4 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Royal Green</a></h5>
											<span class="agent-property text-muted-2">14 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-1.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">10 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Muskaan Estate</a></h5>
											<span class="agent-property text-muted-2">63 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-2.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">9 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Red House</a></h5>
											<span class="agent-property text-muted-2">18 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-3.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">8 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Green Villa</a></h5>
											<span class="agent-property text-muted-2">69 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-4.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">7 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Estate City</a></h5>
											<span class="agent-property text-muted-2">42 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-5.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">3 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">House Design</a></h5>
											<span class="agent-property text-muted-2">31 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-6.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">2 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Jumil Estate</a></h5>
											<span class="agent-property text-muted-2">25 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-7.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">5 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">House Stock</a></h5>
											<span class="agent-property text-muted-2">18 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid card rounded-3 shadow">
								
								<div class="agents-grid-wrap">
									<div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
										<a href="agency-page.html" class="d-inline-flex p-1 rounded border">
											<img src="assets/img/ag-8.png" class="img-fluid rounded" width="130" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil text-center">
										<div class="fr-grid-deatil-flex">
											<div class="mb-1"><span class="label text-light bg-success">6 Agents</span></div>
											<h5 class="fr-can-name mb-0"><a href="#">Ran Estate</a></h5>
											<span class="agent-property text-muted-2">63 Properties</span>
										</div>
									</div>
								</div>
								
								<div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
									<a href="agency-page.html" class="btn btn-light-primary full-width">View Agency<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
								</div>
								
							</div>
						</div>
						
					</div>
					
					<!-- Pagination -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
							<a href="listings-list-with-sidebar.html" class="btn btn-primary px-lg-5 rounded">Explore More Agencies</a>
						</div>
					</div>
					
				</div>	
			</section>
			<!-- ============================ Agent List End ================================== -->
			

@endsection