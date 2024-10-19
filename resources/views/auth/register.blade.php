@extends('base')

@section('title', 'S\'inscrire')

@section('content')

			<!-- ============================ Page Title Start================================== -->
			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">

							<h2 class="ipt-title"> Créer un Compte </h2>
							<span class="ipn-subtitle"> Inscrivez-vous aujourd'hui sur notre site </span>

						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->

			<!-- ============================ Signup Form Start ================================== -->
			<section class="gray-simple">
				<div class="container">


					<!-- row Start -->
					<div class="row justify-content-center">

						<!-- Single blog Grid -->
						<div class="col-xl-7 col-lg-8 col-md-9">
							<div class="card border-0 rounded-4 p-xl-4 p-lg-4 p-md-4 p-3">

								<div class="simple-form">
									<div class="form-header text-center mb-5">
										<div class="effco-logo mb-2">
											<a class="d-flex align-items-center justify-content-center" href="index.html">
												<span class="svg-icon text-primary svg-icon-2hx">
													<svg width="90" height="90" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M15.8797 15.375C15.9797 15.075 15.9797 14.775 15.9797 14.475C15.9797 13.775 15.7797 13.075 15.4797 12.475C14.7797 11.275 13.4797 10.475 11.9797 10.475C11.7797 10.475 11.5797 10.475 11.3797 10.575C7.37971 11.075 4.67971 14.575 2.57971 18.075L10.8797 3.675C11.3797 2.775 12.5797 2.775 13.0797 3.675C13.1797 3.875 13.2797 3.975 13.3797 4.175C15.2797 7.575 16.9797 11.675 15.8797 15.375Z" fill="currentColor"/>
														<path opacity="0.3" d="M20.6797 20.6749C16.7797 20.6749 12.3797 20.275 9.57972 17.575C10.2797 18.075 11.0797 18.375 11.9797 18.375C13.4797 18.375 14.7797 17.5749 15.4797 16.2749C15.6797 15.9749 15.7797 15.675 15.7797 15.375V15.2749C16.8797 11.5749 15.2797 7.47495 13.2797 4.07495L21.6797 18.6749C22.2797 19.5749 21.6797 20.6749 20.6797 20.6749ZM8.67972 18.6749C8.17972 17.8749 7.97972 16.975 7.77972 15.975C7.37972 13.575 8.67972 10.775 11.3797 10.375C7.37972 10.875 4.67972 14.375 2.57972 17.875C2.47972 18.075 2.27972 18.375 2.17972 18.575C1.67972 19.475 2.27972 20.475 3.27972 20.475H10.3797C9.67972 20.175 9.07972 19.3749 8.67972 18.6749Z" fill="currentColor"/>
													</svg>
												</span>
											</a>
										</div>
										<h4 class="fs-2"> Créer votre Compte </h4>
									</div>

									<form method="post" action="{{ route('doregister') }}">
                                    @csrf
										<div class="row">

											<div class="col-lg-12">
												<div class="form-group mb-3">
													<label> Nom </label>
													<input value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nom">
                                                    @error('name')
                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                    @enderror
												</div>
											</div>

											<div class="col-lg-6 col-md-6 mb-6">
												<div class="form-group">
													<label>Email</label>
													<input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                                    @error('email')
                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                    @enderror
												</div>
											</div>

											<div class="col-lg-6 col-md-6 mb-6">
												<div class="form-group">
													<label>Mot de Passe</label>
													<input value="{{ old('password') }}" type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                                    @error('password')
                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                    @enderror
												</div>
											</div>

											<div class="col-lg-12">
												<div class="form-group">
													<label>Phone</label>
													<input value="{{ old('phone') }}" type="number" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="123 546 58">
                                                    @error('phone')
                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                    @enderror
												</div>
											</div>

                                            <!--<div class="col-lg-12">
                                                <div class="col-lg-6 col-md-4 mb-3">
                                                    <input type="radio" id="customer" name="signas" value="customer">
                                                    <label for="customer"> Client </label>
                                                </div>
                                                <div class="col-lg-6 col-md-4 mb-3">
                                                    <input type="radio" id="agent" name="signas" value="agent">
                                                    <label for="agent"> Agent </label>
                                                </div>
                                                <div class="col-lg-6 col-md-4 mb-3">
                                                    <input type="radio" id="agency" name="signas" value="agency">
                                                    <label for="agency"> Agence </label>
                                                </div>
                                            </div>-->

											<div class="col-lg-12">
												<div class="form-group">
													<label>S'inscrire en tant que :</label>
													<select value="{{ old('signas') }}" name="signas" id="signas" class="form-control @error('signas') is-invalid @enderror">
                                                        <option value="">&nbsp;</option>
                                                        <option value="customer" {{ old('signas') == 'customer' ? 'selected' : '' }}> Client </option>
														<option value="agent" {{ old('signas') == 'agent' ? 'selected' : '' }}> Agent </option>
														<option value="agency" {{ old('signas') == 'agency' ? 'selected' : '' }}> Agence </option>
													</select>
                                                    @error('signas')
                                                        <p class="invalid-feedback fw-bold"> {{ $message }} </p>
                                                    @enderror
												</div>
											</div>

										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary full-width fw-medium"> S'inscrire <i class="fa-solid fa-arrow-right-long ms-2"></i></button>
										</div>
                                        <div class="text-center">
                                            <p class="mt-4"> Vous avez déjà un compte? <a href="{{ route('login') }}" class="link fw-medium"> Se Connecter </a></p>
                                        </div>

									</form>
								</div>

								<!--<div class="modal-divider"><span>Or SignUp via</span></div>
								<div class="social-login mb-3">
									<ul>
										<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
										<li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
									</ul>
								</div>-->

							</div>
						</div>

					</div>
					<!-- /row -->

				</div>

			</section>
			<!-- ============================ Signup Form End ================================== -->

			<!-- ============================ Call To Action ================================== -->
			<!--<section class="theme-bg call-to-act-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">

							<div class="call-to-act">
								<div class="call-to-act-head">
									<h3>Want to Become a Real Estate Agent?</h3>
									<span>We'll help you to grow your career and growth.</span>
								</div>
								<a href="#" class="btn btn-call-to-act">SignUp Today</a>
							</div>

						</div>
					</div>
				</div>
			</section>-->
			<!-- ============================ Call To Action End ================================== -->


    <!--<div class="mt-4 container">
        <h1>@yield('title')</h1>

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

        <form method="post" action="{{ route('doregister') }}" class="vstack gap-3">
            @csrf

            @include('shared.input', [
                        'class' => 'col',
                        'type' => 'text',
                        'label' => 'Nom',
                        'name' => 'name'
                        ])
            @include('shared.input', [
                        'class' => 'col',
                        'type' => 'email',
                        'label' => 'Email',
                        'name' => 'email'
                        ])
            @include('shared.input', [
                'class' => 'col',
                'type' => 'password',
                'label' => 'Mot de passe',
                'name' => 'password'
                ])
            <div>
                <button class="btn btn-primary">
                    S'inscrire
                </button>
            </div>
        </form>
    </div>-->
@endsection