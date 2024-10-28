@extends('base')

@section('title', 'Poster une propriété')

@section('content')

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
							
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
                                                        
                                                        <!--<div class="form-group col-md-4">
                                                            <label>Building Age (optional)</label>
                                                            <select id="bage" class="form-control">
                                                                <option value="">&nbsp;</option>
                                                                <option value="1">0 - 5 Years</option>
                                                                <option value="2">0 - 10Years</option>
                                                                <option value="3">0 - 15 Years</option>
                                                                <option value="4">0 - 20 Years</option>
                                                                <option value="5">20+ Years</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-4">
                                                            <label>Garage (optional)</label>
                                                            <select id="garage" class="form-control">
                                                                <option value="">&nbsp;</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-4">
                                                            <label>Rooms (optional)</label>
                                                            <select id="rooms" class="form-control">
                                                                <option value="">&nbsp;</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>-->
                                                        
                                                        <!--<div class="form-group col-md-12">
                                                            <label> Ajouter des Options </label>
                                                            <div class="o-features">
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
                                                        </div>-->

                                                        @include('shared.select', ['label' => 'Options', 'name' => 'options', 'value' => $property->options()->pluck('id'), 'multiple' => true])

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Contact Information -->
                                            <!--<div class="form-submit">	
                                                <h3>Contact Information</h3>
                                                <div class="submit-section">
                                                    <div class="row">
                                                    
                                                        <div class="form-group col-md-4">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        
                                                        <div class="form-group col-md-4">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        
                                                        <div class="form-group col-md-4">
                                                            <label>Phone (optional)</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-lg-12 col-md-12">
                                                <label>GDPR Agreement *</label>
                                                <ul class="no-ul-list">
                                                    <li>
                                                        <input id="aj-1" class="form-check-input" name="aj-1" type="checkbox">
                                                        <label for="aj-1" class="form-check-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
                                                    </li>
                                                </ul>
                                            </div>-->

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

@endsection