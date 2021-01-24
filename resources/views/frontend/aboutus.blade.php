@extends('frontend.layouts.master')
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('frontend/img/about.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/about.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>About US</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">BloodBank</span>
                                <h1 class="promo-primary__title"><span>About</span><br/><span>Organization</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-us start-->
        <section class="section about-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5">
                        <div class="img-box">
                            <div class="img-box__img"><img class="img--bg" src="{{asset('frontend/img/about_2.png')}}" alt="img"/></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-1">
                        <div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
                            <h2 class="heading__title"><span>Help is Our</span> <span>Main Goal</span></h2>
                        </div>
                        <p><strong>Thresher shark rudd African lungfish silverside, Red salmon rockfish grunion, garpike zebra danio king-of-the-salmon banjo catfish."</strong></p>
                        <p>Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch</p>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-us end-->

    </main>
@endsection
