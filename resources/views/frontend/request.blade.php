@extends('frontend.layouts.master')
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('frontend/img/contacts.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/volunteer.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Request</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">Blood Bank</span>
                                <h1 class="promo-primary__title"><span>Enter </span> <span>your request</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section start-->
        <!-- section end-->
        <!-- section start-->
        <section class="section forms-section no-padding-top">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-lg-6">
                        <div class="heading heading--primary"><span class="heading__pre-title"></span>
                            <h2 class="heading__title"><span>Complete</span> <span>the Request Form</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    @if(Session::has('message'))
                        @if(Session::get('alert-type') == 'success')
                            <div class="alert alert--success alert--filled">
                                <div class="alert__icon">
                                    <svg class="icon">
                                        <use xlink:href="#check"></use>
                                    </svg>
                                </div>
                                <p class="alert__text"><strong>Well done!</strong> {{Session::get('message')}}</p><span class="alert__close">
                                            <svg class="icon">
                                                <use xlink:href="#close"></use>
                                            </svg></span>
                            </div>

                        @elseif(Session::get('alert-type') == 'error')
                            <div class="alert alert--error alert--filled">
                                <div class="alert__icon">
                                    <svg class="icon">
                                        <use xlink:href="#close"></use>
                                    </svg>
                                </div>
                                <p class="alert__text"><strong>Oh snap!</strong> {{Session::get('message')}}</p><span class="alert__close">
										<svg class="icon">
											<use xlink:href="#close"></use>
										</svg></span>
                            </div>
                        @endif
                    @endif
                    <div class="col-12">
                        <!-- user form start-->
                        <form method="POST" action="{{route('request.store')}}" class="form user-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6" >


                                    <input type="hidden" name="user_id" value="{{Auth::check() ? Auth::user()->id : ''}}"/>
                                    <input class="form__field" type="email" name="email" value="{{Auth::check() ? Auth::user()->email : ''}}" placeholder="Email" disabled/>

                                    <input type="number" name="contact_number"  class="form__field @error('contact_number') is-invalid @enderror" placeholder="Contact Number" value="{{ old('contact_number') }}"/>
                                    @error('contact_number')
                                    <span class="invalid-feedback" role="alert" style="display: inline">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <input type="text" name="location" class="form__field @error('location') is-invalid @enderror" placeholder="Location (Your address, City, Country)" value="{{ old('location') }}"/>
                                    @error('location')
                                    <span class="invalid-feedback" role="alert" style="display: inline">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <select type="text" name="blood_type" class="form__field @error('blood_type') is-invalid @enderror">
                                        <option selected disabled>Select Blood Group</option>
                                        <option value="O-ve">O-ve</option>
                                        <option value="O+ve">O+ve</option>
                                        <option value="A-ve">A-ve</option>
                                        <option value="A+ve">A+ve</option>
                                        <option value="B-ve">B-ve</option>
                                        <option value="B+ve">B+ve</option>
                                        <option value="AB-ve">AB-ve</option>
                                        <option value="AB+ve">AB+ve</option>
                                    </select>
                                    @error('blood_type')
                                    <span class="invalid-feedback" role="alert" style="display: inline">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <input type="number" name="num_of_bottles" class="form__field @error('num_of_bottles') is-invalid @enderror" placeholder="No of Bottles" value="{{ old('num_of_bottles') }}"/>
                                    @error('num_of_bottles')
                                    <span class="invalid-feedback" role="alert" style="display: inline">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <textarea class="form__field form__message" name="message" placeholder="Add Some Message Here!" value="{{ old('message') }}"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="form__submit" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- user form end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- section end-->
    </main>
@endsection
