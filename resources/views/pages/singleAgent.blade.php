@extends('base')

@section('title', 'Page de l\'agent')

@section('content')

    		<!-- ============================ Page Title Start================================== -->
			<div class="image-cover page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Détails de l'agent</h2>
							<span class="ipn-subtitle">{{$user->name}} From {{$user->state}}</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			@include('shared.alert')
			<!-- ============================ Agency Name Start================================== -->
			<section class="agent-page p-0 gray-simple">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="agency agency-list overlio-40">
							
								<div class="agency-avatar">
									<img src="assets/img/user-5.png" alt="">
								</div>
								
								<div class="agency-content">
									<div class="agency-name">
										<h4><a href="agency-page.html">{{$user->name}}</a></h4>
										<span><i class="lni-map-marker"></i>{{$user->address}}</span>
									</div>
									
									<div class="agency-desc">
                                        @if ($user->agent)
                                          <p>{{$user->agent->description}}</p>      
                                        @endif
									</div>
									
									<div class="prt-detios">
										<span class="label text-light bg-success">202 Property</span>
									</div>
									
									<ul class="social-icons mt-3">
										@if ($user->agent)
                                            <li><a class="facebook" href="{{$user->agent->facebook}}"><i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="{{$user->agent->twitter}}"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a class="linkedin" href="{{$user->agent->instagram}}"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a class="linkedin" href="{{$user->agent->linkedin}}"><i class="fa-brands fa-linkedin"></i></a></li>
                                        @endif
									</ul>
									<div class="clearfix"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Agency Name ================================== -->
			
			<!-- ============================ About Agency ================================== -->
            @if ($user->agent)
                <section class="min gray-simple">
                    <div class="container">
                        <div class="row">
                        
                            <!-- property main detail -->
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                
                                <!-- Single Block Wrap -->
                                <div class="block-wrap">
                                    
                                    <div class="block-header">
                                        <h4 class="block-title">Informations de l'agent</h4>
                                    </div>
                                    
                                    <div class="block-body">
                                        <ul class="dw-proprty-info">
                                            <li><strong>Ceo</strong>{{$user->agent->designation}}</li>
                                            <li><strong>Email</strong>{{$user->agent->email}}</li>
                                            <li><strong>Phone</strong>{{$user->agent->phone}}</li>
                                            <li><strong>Address</strong>{{$user->agent->address}}</li>
                                            <li><strong>City</strong>{{$user->agent->city}}</li>
                                            <li><strong>Country</strong>{{$user->agent->country}}</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                
                                <!-- Single Block Wrap -->
                                <div class="block-wraps">
                                    <div class="block-wraps-header">
                                    
                                        <div class="block-header">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active px-4" id="rental-tab" data-bs-toggle="pill" href="#rental" role="tab" aria-controls="rental" aria-selected="true">Rental</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link px-4" id="sale-tab" data-bs-toggle="pill" href="#sale" role="tab" aria-controls="sale" aria-selected="false">For Sale</a>
                                            </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="block-body">
                                            <div class="tab-content" id="pills-tabContent">
                                            
                                                <div class="tab-pane fade show active" id="rental" role="tabpanel" aria-labelledby="rental-tab">
                                                    <!-- row -->
                                                    <div class="row justify-content-center g-4">
                            
                                                        <!-- Single Property -->
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="property-listing card border rounded-3">
                                                                
                                                                <div class="listing-img-wrapper p-3">
                                                                    <div class="list-img-slide position-relative">
                                                                        <div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
                                                                            <div class="label bg-success text-light d-inline-flex align-items-center justify-content-center">
                                                                                <span class="svg-icon text-light svg-icon-2hx me-1">
                                                                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
                                                                                        <path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
                                                                                    </svg>
                                                                                </span>Verified
                                                                            </div>
                                                                        </div>
                                                                        <div class="clicks rounded-3 overflow-hidden">
                                                                            <div><img src="assets/img/p-3.jpg" class="img-fluid mx-auto" alt="" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="listing-caption-wrapper px-3">
                                                                    <div class="listing-detail-wrapper">
                                                                        <div class="listing-short-detail-wrap">
                                                                            <div class="listing-short-detail">
                                                                                <div class="d-flex align-items-center">
                                                                                    <span class="label bg-light-success text-success prt-type me-2">For Rent</span><span class="label bg-light-purple text-purple property-cats">Apartment</span>
                                                                                </div>
                                                                                <h4 class="listing-name fw-semibold fs-5 mb-1"><a href="single-property-1.html">The Green Canton Chrysler</a></h4>
                                                                                <div class="prt-location text-muted-2">
                                                                                    <span class="svg-icon svg-icon-2hx">
                                                                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"/>
                                                                                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"/>
                                                                                        </svg>
                                                                                    </span>
                                                                                    210 Zirak Road, Canada
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="price-features-wrapper">
                                                                        <div class="list-fx-features d-flex align-items-center justify-content-between">
                                                                            <div class="listing-card d-flex align-items-center">
                                                                                <div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm">3BHK</span>
                                                                            </div>
                                                                            <div class="listing-card d-flex align-items-center">
                                                                                <div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">3 Beds</span>
                                                                            </div>
                                                                            <div class="listing-card d-flex align-items-center">
                                                                                <div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">1800 SQFT</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="listing-detail-footer d-flex align-items-center justify-content-between py-4">
                                                                        <div class="listing-short-detail-flex">
                                                                            <h6 class="listing-card-info-price m-0">$80,000</h6>
                                                                        </div>
                                                                        <div class="footer-flex">
                                                                            <a href="property-detail.html" class="prt-view">
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
                                                        
                                                    </div>
                                                    
                                                    <div class="row align-items-center justify-content-center">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                                                            <a href="#" class="btn btn-primary px-md-5 rounded">Browse More Properties</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="tab-pane fade" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                                                    <!-- row -->
                                                    <!-- row -->
                                                    <div class="row justify-content-center g-4">
                            
                                                        <!-- Single Property -->
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="property-listing card border rounded-3">
                                                                
                                                                <div class="listing-img-wrapper p-3">
                                                                    <div class="list-img-slide position-relative">
                                                                        <div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
                                                                            <div class="label bg-success text-light d-inline-flex align-items-center justify-content-center">
                                                                                <span class="svg-icon text-light svg-icon-2hx me-1">
                                                                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
                                                                                        <path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
                                                                                    </svg>
                                                                                </span>Verified
                                                                            </div>
                                                                        </div>
                                                                        <div class="clicks rounded-3 overflow-hidden">
                                                                            <div><img src="assets/img/p-13.jpg" class="img-fluid mx-auto" alt="" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="listing-caption-wrapper px-3">
                                                                    <div class="listing-detail-wrapper">
                                                                        <div class="listing-short-detail-wrap">
                                                                            <div class="listing-short-detail">
                                                                                <div class="d-flex align-items-center">
                                                                                    <span class="label bg-light-success text-success prt-type me-2">For Rent</span><span class="label bg-light-purple text-purple property-cats">Apartment</span>
                                                                                </div>
                                                                                <h4 class="listing-name fw-semibold fs-5 mb-1"><a href="single-property-1.html">The Green Canton Chrysler</a></h4>
                                                                                <div class="prt-location text-muted-2">
                                                                                    <span class="svg-icon svg-icon-2hx">
                                                                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"/>
                                                                                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"/>
                                                                                        </svg>
                                                                                    </span>
                                                                                    210 Zirak Road, Canada
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="price-features-wrapper">
                                                                        <div class="list-fx-features d-flex align-items-center justify-content-between">
                                                                            <div class="listing-card d-flex align-items-center">
                                                                                <div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-building-shield fs-xs"></i></div><span class="text-muted-2 fs-sm">3BHK</span>
                                                                            </div>
                                                                            <div class="listing-card d-flex align-items-center">
                                                                                <div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-bed fs-xs"></i></div><span class="text-muted-2 fs-sm">3 Beds</span>
                                                                            </div>
                                                                            <div class="listing-card d-flex align-items-center">
                                                                                <div class="square--25 text-muted-2 fs-sm circle gray-simple me-1"><i class="fa-solid fa-clone fs-xs"></i></div><span class="text-muted-2 fs-sm">1800 SQFT</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="listing-detail-footer d-flex align-items-center justify-content-between py-4">
                                                                        <div class="listing-short-detail-flex">
                                                                            <h6 class="listing-card-info-price m-0">$80,000</h6>
                                                                        </div>
                                                                        <div class="footer-flex">
                                                                            <a href="property-detail.html" class="prt-view">
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
                                                        
                                                    </div>
                                                    
                                                    <div class="row align-items-center justify-content-center">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                                                            <a href="#" class="btn btn-primary px-md-5 rounded">Browse More Properties</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            
                            <!-- property Sidebar -->
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                    
                                <div class="details-sidebar">
                            
                                    <!-- Agent Detail -->
                                    <div class="sides-widget">
                                        <div class="sides-widget-header bg-primary">
                                            <div class="agent-photo"><img src="assets/img/user-6.png" alt=""></div>
                                            <div class="sides-widget-details">
                                                <h4><a href="#">Adam D. Okraar</a></h4>
                                                <span><i class="lni-phone-handset"></i>(91) 123 456 7895</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                        <div class="sides-widget-body simple-form">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" placeholder="Your Email">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone No.</label>
                                                <input type="text" class="form-control" placeholder="Your Phone">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control">I'm interested in this property.</textarea>
                                            </div>
                                            <button class="btn btn-dark rounded full-width">Send Message</button>
                                        </div>
                                    </div>
                                    
                                    <!-- Featured Property -->
                                    <div class="sidebar-widgets">
                                        
                                        <h4>Featured Property</h4>
                                        
                                        <div class="sidebar_featured_property">
                                            
                                            <!-- List Sibar Property -->
                                            {{--<div class="sides_list_property">
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
                                            </div>--}}
                                            
                                        </div>
                                        
                                    </div>
                                
                                </div>
                                    
                            </div>
                        
                        </div>					
                    </div>	
                </section>
            @endif
			<!-- ============================ About Agency End ================================== -->
			

@endsection