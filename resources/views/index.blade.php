@extends('frontend.layouts.master')
@section('content')
    <main class="main">
        <!-- promo start-->
        <section class="promo">
            <div class="promo-slider">
                <div class="promo-slider__item promo-slider__item--style-1">
                    <picture>
                        <source srcset="{{asset('frontend/img/causes.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/promo_1.jpg')}}" alt="img"/>
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span></span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-2">
                    <picture>
                        <source srcset="{{asset('frontend/img/contact.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/promo_2.jpg')}}" alt="img"/>
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xl-7">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span></span><br/><span></span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-3">
                    <picture>
                        <source srcset="{{asset('frontend/img/donors.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/promo_3.jpg')}}" alt="img"/>
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span></span><br/><span></span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slider nav start-->
            <div class="slider__nav slider__nav--promo">
                <div class="promo-slider__count"></div>
                <div class="slider__arrows">
                    <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <!-- slider nav end-->
        </section>
        <!-- promo end-->

        <!-- section start-->
        <section class="section">
            <!-- counter style-3 start-->
            <div class="container">
                <div class="row offset-margin">
                    <div class="col-md-4 text-center">
                        <div class="counter-item counter-item--style-3">
                            <div class="counter-item__top">
                                <h6 class="counter-item__title">Requests</h6>
                            </div>
                            <div class="counter-item__lower"><span class="js-counter">@if($bloodrequests != null){{count($bloodrequests)}}@endif</span><span> </span></div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="counter-item counter-item--style-3">
                            <div class="counter-item__top">
                                <h6 class="counter-item__title">Donations Received</h6>
                            </div>
                            <div class="counter-item__lower"><span class="js-counter">{{count($donations)}}</span><span></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="counter-item counter-item--style-3">
                            <div class="counter-item__top">
                                <h6 class="counter-item__title">Users</h6>
                            </div>
                            <div class="counter-item__lower"><span class="js-counter">{{count($users)}}</span><span> </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter style-3 end-->
        </section>
        <!-- section end-->
        <!-- causes start-->
        <section class="section causes" style="color: white">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-xl-5">
                        <div class="heading heading--primary"><span class="heading__pre-title" style="color: white">What we Do</span>
                            <h2 class="heading__title" style="color: white"><span>Helpo</span> <span>Causes</span></h2>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <p class="no-margin-bottom">Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p><a class="button button--blue margin-top-30" href="causes.html">More Causes</a>
                    </div>
                </div>
            </div>
            <div class="causes-holder">
                <div class="causes-holder__wrapper">
                    <div class="causes-slider causes-slider--dots offset-margin">

                        @foreach($filteredRequests as $filteredRequest)

                            <div class="causes-slider__item">
                                <div class="causes-item causes-item--primary">
                                    <div class="causes-item__body">
                                        <div class="causes-item__top">
                                            @foreach($users as $user)
                                                <h6 class="causes-item__title"> <a href="cause-details.html">{{$user->id == $filteredRequest->user_id ? $user->name : ''}}</a></h6>
                                            @endforeach
                                            <p>{{Str::limit($filteredRequest->message,120,'...')}}</p>
                                        </div>
                                        <div class="causes-item__lower">
                                            <div class="progress-bar">
                                                <div class="progress-bar__inner" style="width: {{$filteredRequest->percentage}}%;">
                                                    <div class="progress-bar__value">{{$filteredRequest->percentage,2}}%</div>
                                                </div>
                                            </div>
                                            <div class="causes-item__details-holder">
                                                <div class="causes-item__details-item"><span>Blood Group: </span><span>{{$filteredRequest->blood_type}}</span></div>
                                                <div class="causes-item__details-item text-right"><span>Number of Bottles: </span><span>{{$filteredRequest->num_of_bottles}}</span></div>
                                            </div>
                                        </div>
                                    </div><a class="button causes-item__button button--primary" href="{{route('donation.create',$filteredRequest->id)}}">+ Donate</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="causes-slider__dots"></div>
            </div>
        </section>
        <!-- causes end-->

    </main>
@endsection
