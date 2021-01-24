@extends('frontend.layouts.master')
@section('content')
    <main class="main">
        <!-- promo start-->
        <section class="promo">
            <div class="promo-slider">
                <div class="promo-slider__item promo-slider__item--style-1">
                    <picture>
                        <source srcset="{{asset('frontend/img/promo_1.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/promo_1.jpg')}}" alt="img"/>
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>Blood Bank</span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Add some content here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-2">
                    <picture>
                        <source srcset="{{asset('frontend/img/promo_2.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/promo_2.jpg')}}" alt="img"/>
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xl-7">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>Our Helping</span><br/><span>around the world.</span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-3">
                    <picture>
                        <source srcset="{{asset('frontend/img/promo_3.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/promo_3.jpg')}}" alt="img"/>
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>Helpo Volounteers</span><br/><span>Around the world.</span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- promo pannel start-->
            <div class="promo-pannel">
                <div class="promo-pannel__phones">
                    <p class="promo-pannel__title">Phone numbers</p><a class="promo-pannel__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="promo-pannel__link" href="tel:+18009756511">+ 1800 - 975 65 11</a>
                </div>
                <div class="promo-pannel__email">
                    <p class="promo-pannel__title">Email</p><a class="promo-pannel__link" href="mailto:support@helpo.org">support@helpo.org</a>
                </div>
                <div class="promo-pannel__socials">
                    <p class="promo-pannel__title">Socials</p>
                    <ul class="promo-socials">
                        <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- promo pannel end-->
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
                                <h6 class="counter-item__title">FullFill Requests</h6>
                            </div>
                            <div class="counter-item__lower"><span class="js-counter">300</span><span>k</span></div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="counter-item counter-item--style-3">
                            <div class="counter-item__top">
                                <h6 class="counter-item__title">Donations Received</h6>
                            </div>
                            <div class="counter-item__lower"><span class="js-counter">65</span><span>bil</span></div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="counter-item counter-item--style-3">
                            <div class="counter-item__top">
                                <h6 class="counter-item__title">Users</h6>
                            </div>
                            <div class="counter-item__lower"><span class="js-counter">100</span><span>k +</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter style-3 end-->
        </section>
        <!-- section end-->
        <!-- causes start-->
        <section class="section causes">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-xl-5">
                        <div class="heading heading--primary"><span class="heading__pre-title color--green">What we Do</span>
                            <h2 class="heading__title"><span>Helpo</span> <span>Causes</span></h2>
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

                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="cause-details.html">Username here</a></h6>
                                        <p>Add Some description here! candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 78%;">
                                                <div class="progress-bar__value">78%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Blood Group: </span><span>B+</span></div>
                                            <div class="causes-item__details-item text-right"><span>Number of Bottles: </span><span>10</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>

                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="cause-details.html">Username here</a></h6>
                                        <p>Add Some description here! candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 78%;">
                                                <div class="progress-bar__value">78%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Blood Group: </span><span>B+</span></div>
                                            <div class="causes-item__details-item text-right"><span>Number of Bottles: </span><span>10</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="cause-details.html">Username here</a></h6>
                                        <p>Add Some description here! candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 78%;">
                                                <div class="progress-bar__value">78%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Blood Group: </span><span>B+</span></div>
                                            <div class="causes-item__details-item text-right"><span>Number of Bottles: </span><span>10</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="cause-details.html">Username here</a></h6>
                                        <p>Add Some description here! candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 78%;">
                                                <div class="progress-bar__value">78%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Blood Group: </span><span>B+</span></div>
                                            <div class="causes-item__details-item text-right"><span>Number of Bottles: </span><span>10</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="causes-slider__dots"></div>
            </div>
        </section>
        <!-- causes end-->

    </main>
@endsection
