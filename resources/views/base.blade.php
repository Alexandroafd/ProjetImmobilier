<!DOCTYPE html>
<html lang="FR-fr">
	
<!-- Mirrored from shreethemes.net/resido-live/resido/create-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2024 12:02:13 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title> @yield('title') </title>	
		
        <!-- Custom CSS -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
		
    </head>
	
    <body class="blue-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light head-shadow">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand text-logo" href="{{route('home')}}">
								<span class="svg-icon text-primary svg-icon-2hx">
									<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M15.8797 15.375C15.9797 15.075 15.9797 14.775 15.9797 14.475C15.9797 13.775 15.7797 13.075 15.4797 12.475C14.7797 11.275 13.4797 10.475 11.9797 10.475C11.7797 10.475 11.5797 10.475 11.3797 10.575C7.37971 11.075 4.67971 14.575 2.57971 18.075L10.8797 3.675C11.3797 2.775 12.5797 2.775 13.0797 3.675C13.1797 3.875 13.2797 3.975 13.3797 4.175C15.2797 7.575 16.9797 11.675 15.8797 15.375Z" fill="currentColor"/>
										<path opacity="0.3" d="M20.6797 20.6749C16.7797 20.6749 12.3797 20.275 9.57972 17.575C10.2797 18.075 11.0797 18.375 11.9797 18.375C13.4797 18.375 14.7797 17.5749 15.4797 16.2749C15.6797 15.9749 15.7797 15.675 15.7797 15.375V15.2749C16.8797 11.5749 15.2797 7.47495 13.2797 4.07495L21.6797 18.6749C22.2797 19.5749 21.6797 20.6749 20.6797 20.6749ZM8.67972 18.6749C8.17972 17.8749 7.97972 16.975 7.77972 15.975C7.37972 13.575 8.67972 10.775 11.3797 10.375C7.37972 10.875 4.67972 14.375 2.57972 17.875C2.47972 18.075 2.27972 18.375 2.17972 18.575C1.67972 19.475 2.27972 20.475 3.27972 20.475H10.3797C9.67972 20.175 9.07972 19.3749 8.67972 18.6749Z" fill="currentColor"/>
									</svg>
								</span><h5 class="fs-3 fw-bold ms-1 my-0">Resido</h5>
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li>
										<a href="{{route('login')}}" data-bs-toggle="modal" data-bs-target="#login" class="text-dark opacity-75">
											<span class="svg-icon svg-icon-2hx">
												<svg width="35" height="35" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor"/>
													<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor"/>
													<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</li>
									<li>
										@if (Auth::check())
                                            <a href="{{route('admin.property.create')}}" class="text-primary">
                                                <span class="svg-icon svg-icon-2hx">
                                                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"/>
                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"/>
                                                    </svg>
                                                </span>	
                                            </a>
                                        @endif
									</li>
									<!--<li>
										<a href="#" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
											<span class="svg-icon svg-icon-2hx">
												<svg width="22" height="22" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect y="6" width="16" height="3" rx="1.5" fill="currentColor"/>
													<rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="currentColor"/>
													<rect opacity="0.3" width="12" height="3" rx="1.5" fill="currentColor"/>
												</svg>
											</span>
										</a>
									</li>-->
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li><a href="{{route('home')}}">Accueil<span class="submenu-indicator"></span></a>
									{{--<ul class="nav-dropdown nav-submenu">
										<li><a class="active" href="index.html">Home Layout 1</a></li>
										<li><a href="home-2.html">Home Layout 2</a></li>
										<li><a href="home-3.html">Home Layout 3</a></li>
										<li><a href="home-4.html">Home Layout 4</a></li>
										<li><a href="home-5.html">Home Layout 5</a></li>
										<li><a href="home-6.html">Home Layout 6</a></li>
										<li><a href="home-7.html">Home Layout 7</a></li>
										<li><a href="home-8.html">Home Layout 8</a></li>
										<li><a href="home-9.html">Home Layout 9</a></li>
										<li><a href="home-10.html">Home Layout 10<span class="ms-2 label-new">New</span></a></li>
										<li><a href="home-11.html">Home Layout 11<span class="ms-2 label-new">New</span></a></li>
										<li><a href="video.html">Video Home</a></li>
										<li><a href="map.html">Map Home Layout</a></li>
									</ul>--}}
								</li>
								
								<li><a href="{{route('property.index')}}">Biens<span class="submenu-indicator"></span></a>
									{{--<ul class="nav-dropdown nav-submenu">
										<li><a href="JavaScript:Void(0);"> Biens <span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="list-layout-new.html">List Layout Simple<span class="ms-2 label-new">New</span></a></li>
												<li><a href="list-layout-new-3.html">List Layout Modern<span class="ms-2 label-new">New</span></a></li>                                    
												<li><a href="list-layout-new-2.html">List Layout Advance<span class="ms-2 label-new">New</span></a></li>                                    
												<li><a href="list-layout-with-map.html">With Map</a></li>                                    
												<li><a href="list-layout-full.html">Full Width</a></li>
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">Grid Layout<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="grid-layout-with-sidebar.html">With Sidebar</a></li>                                    
												<li><a href="classical-layout-with-sidebar.html">Classical With Sidebar</a></li>                                    
												<li><a href="grid-layout-with-map.html">With Map</a></li>                                    
												<li><a href="grid.html">Full Width</a></li>
												<li><a href="classical-property.html">Classical Full Width</a></li>	 
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">With Map Property<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="list-layout-with-map.html">List With Map</a></li>                                    
												<li><a href="grid-layout-with-map.html">Grid With Map</a></li>                                    
												<li><a href="classical-layout-with-map.html">Classical With Map</a></li>                                    
												<li><a href="half-map.html">Half Map Search</a></li>
												<li><a href="half-map-2.html">Half Map Search 02<span class="ms-2 label-new">New</span></a></li>												
											</ul>
										</li>
									</ul>--}}
								</li>
								
								{{--<li><a href="single-property-1.html">Features<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="JavaScript:Void(0);">Single Property<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="single-property-1.html">Single Property 1</a></li>                                    
												<li><a href="single-property-2.html">Single Property 2</a></li>                                    
												<li><a href="single-property-3.html">Single Property 3</a></li> 
												<li><a href="single-property-4.html">Single Property 4<span class="ms-2 label-new">New</span></a></li> 												
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">Agencies & Agents<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="agents.html">Agents List</a></li>                                    
												<li><a href="agent-page.html">Agent Page</a></li>                                    
												<li><a href="agencies.html">Agencies List</a></li>                                    
												<li><a href="agency-page.html">Agency Page</a></li> 
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">My Account<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="dashboard.html">User Dashboard</a></li><li><a href="payment.html">Payment Confirmation</a></li>
												<li><a href="my-profile.html">My Profile</a></li>                                    
												<li><a href="my-property.html">Property List</a></li>                                    
												<li><a href="bookmark-list.html">Bookmarked Listings</a></li>                                    
												<li><a href="change-password.html">Change Password</a></li> 
											</ul>
										</li>
										<li>
											<a href="compare-property.html">Compare Property</a>                                
										</li>
										<li>
											<a href="submit-property.html">Submit Property</a>                                
										</li>
									</ul>
								</li>--}}
								
								{{--<li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="blog.html">Blogs Page</a></li>                                    
										<li><a href="blog-detail.html">Blog Detail</a></li>                                    
										<li><a href="component.html">Shortcodes</a></li> 
										<li><a href="pricing.html">Pricing</a></li>  
										<li><a href="404.html">Error Page</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</li>--}}
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
                                <li>
                                    <a href="{{route('login')}}" data-bs-toggle="modal" data-bs-target="#login" class="fw-medium text-muted-2">
                                        <span class="svg-icon svg-icon-2hx me-1">
                                            <svg width="22" height="22" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor"/>
                                                <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor"/>
                                                <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor"/>
                                            </svg>
                                        </span>
                                            Connexion / Inscription
                                    </a>
                                </li>
                                @if (Auth::check())                                
                                    <li class="add-listing">
                                        <a href="{{route('admin.property.create')}}" class="bg-primary">
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx me-1">
                                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="currentColor"/>
                                                    <path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="currentColor"/>
                                                    <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="currentColor"/>
                                                </svg>
                                            </span>Poster une Propriété
                                        </a>
                                    </li>
                                    <!--<li>
                                        <a href="#" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                            <span class="svg-icon svg-icon-2hx">
                                                <svg width="24" height="24" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect y="6" width="16" height="3" rx="1.5" fill="currentColor"/>
                                                    <rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="currentColor"/>
                                                    <rect opacity="0.3" width="12" height="3" rx="1.5" fill="currentColor"/>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>--> 
                                @endif
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			{{--<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasScrollingLabel">Compare & Selected Property</h5>
					<a href="#" data-bs-dismiss="offcanvas" aria-label="Close">
						<span class="svg-icon text-primary svg-icon-2hx">
							<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
								<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
								<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
							</svg>
						</span>
					</a>
				</div>
				<div class="offcanvas-body">
					<ul class="nav nav-pills sider_tab mb-3" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-compare-tab" data-bs-toggle="pill" data-bs-target="#pills-compare" type="button" role="tab" aria-controls="pills-compare" aria-selected="true">Compare Property</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-saved-tab" data-bs-toggle="pill" data-bs-target="#pills-saved" type="button" role="tab" aria-controls="pills-saved" aria-selected="false">Saved Property</button>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-compare" role="tabpanel" aria-labelledby="pills-compare-tab" tabindex="0">
							<div class="sidebar_featured_property">
										
								<!-- List Sibar Property -->
								<div class="sides_list_property p-2">
									<div class="sides_list_property_thumb">
										<img src="assets/img/p-1.jpg" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Loss vengel New Apartment</a></h4>
										<span class="text-muted-2"><i class="fa-solid fa-location-dot"></i>Sans Fransico</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix sale">For Sale</div>
											</div>
											<div class="lists_property_price_value">
												<h4 class="text-primary">$4,240</h4>
											</div>
										</div>
									</div>
								</div>
								
								<!-- List Sibar Property -->
								<div class="sides_list_property p-2">
									<div class="sides_list_property_thumb">
										<img src="assets/img/p-4.jpg" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Montreal Quriqe Apartment</a></h4>
										<span class="text-muted-2"><i class="fa-solid fa-location-dot"></i>Liverpool, London</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix">For Rent</div>
											</div>
											<div class="lists_property_price_value">
												<h4 class="text-primary">$7,380</h4>
											</div>
										</div>
									</div>
								</div>
								
								<!-- List Sibar Property -->
								<div class="sides_list_property p-2">
									<div class="sides_list_property_thumb">
										<img src="assets/img/p-7.jpg" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Curmic Studio For Office</a></h4>
										<span class="text-muted-2"><i class="fa-solid fa-location-dot"></i>Montreal, Canada</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix buy">For Buy</div>
											</div>
											<div class="lists_property_price_value">
												<h4 class="text-primary">$8,730</h4>
											</div>
										</div>
									</div>
								</div>
								
								<!-- List Sibar Property -->
								<div class="sides_list_property p-2">
									<div class="sides_list_property_thumb">
										<img src="assets/img/p-5.jpg" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Montreal Quebec City</a></h4>
										<span class="text-muted-2"><i class="fa-solid fa-location-dot"></i>Sreek View, New York</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix">For Rent</div>
											</div>
											<div class="lists_property_price_value">
												<h4 class="text-primary">$6,240</h4>
											</div>
										</div>
									</div>
								</div>
								
								<div class="input-group">
									<a href="compare-property.html" class="btn btn-light-primary fw-medium full-width">View & Compare</a>
								</div>
							</div>	
						</div>
						<div class="tab-pane fade" id="pills-saved" role="tabpanel" aria-labelledby="pills-saved-tab" tabindex="0">
							<div class="sidebar_featured_property">
										
								<!-- List Sibar Property -->
								<div class="sides_list_property p-2">
									<div class="sides_list_property_thumb">
										<img src="assets/img/p-2.jpg" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Loss vengel New Apartment</a></h4>
										<span class="text-muted-2"><i class="fa-solid fa-location-dot"></i>Sans Fransico</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix sale">For Sale</div>
											</div>
											<div class="lists_property_price_value">
												<h4 class="text-primary">$4,240</h4>
											</div>
										</div>
									</div>
								</div>
								
								<!-- List Sibar Property -->
								<div class="sides_list_property p-2">
									<div class="sides_list_property_thumb">
										<img src="assets/img/p-3.jpg" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Montreal Quriqe Apartment</a></h4>
										<span class="text-muted-2"><i class="fa-solid fa-location-dot"></i>Liverpool, London</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix">For Rent</div>
											</div>
											<div class="lists_property_price_value">
												<h4 class="text-primary">$7,380</h4>
											</div>
										</div>
									</div>
								</div>
								
								<!-- List Sibar Property -->
								<div class="sides_list_property p-2">
									<div class="sides_list_property_thumb">
										<img src="assets/img/p-4.jpg" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Curmic Studio For Office</a></h4>
										<span class="text-muted-2"><i class="fa-solid fa-location-dot"></i>Montreal, Canada</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix buy">For Buy</div>
											</div>
											<div class="lists_property_price_value">
												<h4 class="text-primary">$8,730</h4>
											</div>
										</div>
									</div>
								</div>
								
								<!-- List Sibar Property -->
								<div class="sides_list_property p-2">
									<div class="sides_list_property_thumb">
										<img src="assets/img/p-27.jpg" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Montreal Quebec City</a></h4>
										<span class="text-muted-2"><i class="fa-solid fa-location-dot"></i>Sreek View, New York</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix">For Rent</div>
											</div>
											<div class="lists_property_price_value">
												<h4 class="text-primary">$6,240</h4>
											</div>
										</div>
									</div>
								</div>
								
								<div class="input-group">
									<a href="#" class="btn btn-light-primary fw-medium full-width">View & Compare</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>--}}
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->

			@yield('content')

			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer">
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-3 col-md-4">
								<div class="footer-widget">
									<a class="nav-footer-logo" href="index.html">
										<span class="svg-icon text-light svg-icon-2hx">
											<svg width="65" height="65" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.8797 15.375C15.9797 15.075 15.9797 14.775 15.9797 14.475C15.9797 13.775 15.7797 13.075 15.4797 12.475C14.7797 11.275 13.4797 10.475 11.9797 10.475C11.7797 10.475 11.5797 10.475 11.3797 10.575C7.37971 11.075 4.67971 14.575 2.57971 18.075L10.8797 3.675C11.3797 2.775 12.5797 2.775 13.0797 3.675C13.1797 3.875 13.2797 3.975 13.3797 4.175C15.2797 7.575 16.9797 11.675 15.8797 15.375Z" fill="currentColor"/>
												<path opacity="0.3" d="M20.6797 20.6749C16.7797 20.6749 12.3797 20.275 9.57972 17.575C10.2797 18.075 11.0797 18.375 11.9797 18.375C13.4797 18.375 14.7797 17.5749 15.4797 16.2749C15.6797 15.9749 15.7797 15.675 15.7797 15.375V15.2749C16.8797 11.5749 15.2797 7.47495 13.2797 4.07495L21.6797 18.6749C22.2797 19.5749 21.6797 20.6749 20.6797 20.6749ZM8.67972 18.6749C8.17972 17.8749 7.97972 16.975 7.77972 15.975C7.37972 13.575 8.67972 10.775 11.3797 10.375C7.37972 10.875 4.67972 14.375 2.57972 17.875C2.47972 18.075 2.27972 18.375 2.17972 18.575C1.67972 19.475 2.27972 20.475 3.27972 20.475H10.3797C9.67972 20.175 9.07972 19.3749 8.67972 18.6749Z" fill="currentColor"/>
											</svg>
										</span><h5 class="fs-2 fw-bold text-light ms-1 my-0">Resido</h5>
									</a>
									<div class="footer-add">
										<p>Collins Street West, Victoria 8007, Australia.</p>
										<p>+1 246-345-0695</p>
										<p>info@example.com</p>
									</div>
									
								</div>
							</div>		
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Navigations</h4>
									<ul class="footer-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">FAQs Page</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="blog.html">Blog</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">The Highlights</h4>
									<ul class="footer-menu">
										<li><a href="#">Apartment</a></li>
										<li><a href="#">My Houses</a></li>
										<li><a href="#">Restaurant</a></li>
										<li><a href="#">Nightlife</a></li>
										<li><a href="#">Villas</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-2 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">My Account</h4>
									<ul class="footer-menu">
										<li><a href="#">My Profile</a></li>
										<li><a href="#">My account</a></li>
										<li><a href="#">My Property</a></li>
										<li><a href="#">Favorites</a></li>
										<li><a href="#">Cart</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">Download Apps</h4>
									<a href="#" class="other-store-link">
										<div class="other-store-app">
											<div class="os-app-icon">
												<span class="svg-icon text-light svg-icon-2hx">
													<svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M4.335 8.61499C3.98049 8.61579 3.64078 8.75725 3.39048 9.0083C3.14018 9.25935 2.99973 9.59947 3 9.95398V15.307C3 15.6611 3.14065 16.0006 3.39101 16.251C3.64138 16.5013 3.98094 16.642 4.335 16.642C4.68907 16.642 5.02863 16.5013 5.27899 16.251C5.52935 16.0006 5.67 15.6611 5.67 15.307V9.95398C5.67027 9.59947 5.52983 9.25935 5.27953 9.0083C5.02922 8.75725 4.68952 8.61579 4.335 8.61499ZM20.353 8.61499C19.9986 8.61579 19.659 8.75734 19.4088 9.00842C19.1587 9.25951 19.0185 9.59956 19.019 9.95398V15.307C19.0141 15.4853 19.045 15.6628 19.1099 15.829C19.1748 15.9952 19.2723 16.1467 19.3967 16.2745C19.5211 16.4024 19.6699 16.504 19.8342 16.5734C19.9985 16.6428 20.1751 16.6786 20.3535 16.6786C20.5319 16.6786 20.7085 16.6428 20.8728 16.5734C21.0371 16.504 21.1859 16.4024 21.3103 16.2745C21.4347 16.1467 21.5322 15.9952 21.5971 15.829C21.662 15.6628 21.6929 15.4853 21.688 15.307V9.95398C21.6883 9.59947 21.5478 9.25935 21.2975 9.0083C21.0472 8.75725 20.7075 8.61579 20.353 8.61499Z" fill="currentColor"/>
														<path d="M8.33899 18.062V20.662C8.33899 21.0161 8.47964 21.3556 8.73 21.606C8.98036 21.8563 9.31993 21.9969 9.67399 21.9969C10.0281 21.9969 10.3676 21.8563 10.618 21.606C10.8683 21.3556 11.009 21.0161 11.009 20.662V18.062H8.33899Z" fill="currentColor"/>
														<path opacity="0.3" d="M16.344 18.062C16.6984 18.0615 17.0381 17.9202 17.2885 17.6693C17.5388 17.4184 17.6793 17.0784 17.679 16.724V8.69299H7.004V16.724C7.00373 17.0784 7.1442 17.4184 7.39454 17.6693C7.64487 17.9202 7.98458 18.0615 8.339 18.062H16.344Z" fill="currentColor"/>
														<path d="M13.679 18.062V20.662C13.679 21.0161 13.8196 21.3556 14.07 21.606C14.3204 21.8563 14.6599 21.9969 15.014 21.9969C15.368 21.9969 15.7076 21.8563 15.958 21.606C16.2083 21.3556 16.349 21.0161 16.349 20.662V18.062H13.679Z" fill="currentColor"/>
														<path d="M15.676 4.53889L16.864 3.09492C16.9209 3.02747 16.9639 2.94945 16.9904 2.8653C17.017 2.78115 17.0266 2.69257 17.0187 2.60468C17.0109 2.51679 16.9857 2.43131 16.9446 2.35322C16.9035 2.27512 16.8474 2.206 16.7794 2.14973C16.7115 2.09345 16.633 2.05112 16.5486 2.02534C16.4642 1.99955 16.3756 1.99079 16.2878 1.99946C16.2 2.00813 16.1147 2.03408 16.037 2.07587C15.9593 2.11767 15.8906 2.17451 15.835 2.24299L14.535 3.82099C13.8435 3.50074 13.0902 3.33617 12.3282 3.33893C11.5662 3.3417 10.8141 3.51173 10.125 3.83698L8.85999 2.2519C8.80503 2.18348 8.73714 2.1266 8.66018 2.08442C8.58322 2.04224 8.49871 2.01569 8.41147 2.00617C8.32423 1.99665 8.23597 2.00441 8.15173 2.029C8.06748 2.05359 7.98891 2.09452 7.92049 2.14948C7.85207 2.20444 7.79515 2.27235 7.75297 2.34931C7.71079 2.42627 7.68418 2.51073 7.67466 2.59797C7.66515 2.68521 7.6729 2.77349 7.69749 2.85773C7.72209 2.94198 7.76303 3.02052 7.81799 3.08893L8.98999 4.55793C8.37138 5.05535 7.87187 5.68486 7.52806 6.40034C7.18426 7.11581 7.00485 7.89915 7.00299 8.69294H17.684C17.6821 7.8943 17.5006 7.10632 17.1531 6.38727C16.8055 5.66823 16.3007 5.03648 15.676 4.53889ZM10.676 7.34699C10.4782 7.34699 10.2849 7.28829 10.1204 7.17841C9.95597 7.06853 9.8278 6.91241 9.75211 6.72968C9.67642 6.54696 9.65662 6.34578 9.69521 6.1518C9.73379 5.95782 9.82903 5.77969 9.96888 5.63984C10.1087 5.49998 10.2869 5.40474 10.4809 5.36616C10.6749 5.32757 10.8759 5.34735 11.0587 5.42304C11.2414 5.49873 11.3976 5.62688 11.5075 5.79133C11.6173 5.95578 11.676 6.14921 11.676 6.34699C11.676 6.61221 11.5706 6.86649 11.3831 7.05402C11.1956 7.24156 10.9412 7.34699 10.676 7.34699ZM14.005 7.34699C13.8072 7.34699 13.6139 7.28829 13.4494 7.17841C13.285 7.06853 13.1568 6.91241 13.0811 6.72968C13.0054 6.54696 12.9856 6.34578 13.0242 6.1518C13.0628 5.95782 13.158 5.77969 13.2979 5.63984C13.4377 5.49998 13.6159 5.40474 13.8099 5.36616C14.0039 5.32757 14.2049 5.34735 14.3877 5.42304C14.5704 5.49873 14.7266 5.62688 14.8365 5.79133C14.9463 5.95578 15.005 6.14921 15.005 6.34699C15.005 6.61221 14.8996 6.86649 14.7121 7.05402C14.5246 7.24156 14.2702 7.34699 14.005 7.34699Z" fill="currentColor"/>
													</svg>
												</span>
											</div>
											<div class="os-app-caps">
												Google Play
												<span>Get It Now</span>
											</div>
										</div>
									</a>
									<a href="#" class="other-store-link">
										<div class="other-store-app">
											<div class="os-app-icon">
												<span class="svg-icon text-light svg-icon-2hx">
													<svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M15.0082 5.05202C15.5082 4.45202 15.9082 3.65207 16.0082 2.85207C16.1082 2.25207 15.5082 1.85202 15.0082 2.05202C14.2082 2.35202 13.5082 2.85205 12.9082 3.45205C12.4082 4.05205 12.0082 4.8521 11.9082 5.7521C11.9082 6.2521 12.4082 6.65205 12.8082 6.45205C13.7082 6.35205 14.5082 5.75202 15.0082 5.05202Z" fill="currentColor"/>
														<path opacity="0.3" d="M18.4082 10.0519C18.8082 9.65195 18.8082 8.95195 18.3082 8.55195C17.6082 8.05195 16.8082 7.65195 15.9082 7.55195C14.6082 7.45195 13.5082 8.35199 12.2082 8.35199C11.0082 8.35199 10.1082 7.55195 8.70818 7.55195C7.30818 7.55195 5.80818 8.45197 4.80818 9.95197C3.50818 12.052 3.70818 15.952 5.90818 19.352C6.70818 20.552 7.70818 21.852 9.10818 21.952C10.3082 21.952 10.7082 21.152 12.3082 21.152C13.9082 21.152 14.3082 21.952 15.5082 21.952C16.9082 21.952 18.0082 20.452 18.7082 19.252C19.1082 18.652 19.3082 18.352 19.5082 17.852C19.7082 17.452 19.5082 16.852 19.1082 16.652C16.8082 15.052 16.5082 11.8519 18.4082 10.0519Z" fill="currentColor"/>
													</svg>
												</span>
											</div>
											<div class="os-app-caps">
												App Store
												<span>Now it Available</span>
											</div>
										</div>
									</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-6 col-md-6">
								<p class="mb-0">© 2023 Resido. Designd By <a href="https://themezhub.com/">Themez Hub</a> All Rights Reserved</p>
							</div>
							
							<div class="col-lg-6 col-md-6 text-right">
								<ul class="footer-bottom-social">
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/rangeslider.js')}}"></script>
		<script src="{{asset('assets/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/js/slick.js')}}"></script>
		<script src="{{asset('assets/js/slider-bg.js')}}"></script>
		<script src="{{asset('assets/js/lightbox.js')}}"></script> 
		<script src="{{asset('assets/js/imagesloaded.js')}}"></script>
		 
		<script src="{{asset('assets/js/custom.js')}}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from shreethemes.net/resido-live/resido/create-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2024 12:02:13 GMT -->
</html>
{{--<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>@yield('title') MonAgence</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Agence</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
              $route = request()->route()->getName();
            @endphp
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('property.index') }}" @class(['nav-link', 'active' => str_contains($route, 'property.')])>Biens</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>--}}
