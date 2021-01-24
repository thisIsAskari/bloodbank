@extends('frontend.layouts.master')
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('frontend/img/volunteer.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/volunteer.jpg')}}" alt="img"/>
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
                    <div class="col-12">
                        <!-- user form start-->
                        <form class="form user-form" action="javascript:void(0);">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="first-name" placeholder="Name"/>
                                    <input class="form__field" type="email" name="email" placeholder="E-mail"/>
                                    <input class="form__field" type="number" name="phone-number" placeholder="Phone Number"/>
                                    <input class="form__field" type="text" name="adress" placeholder="Location"/>
                                    <input class="form__field" type="text" name="date-of-birth" placeholder="Blood Group"/>
                                    <input class="form__field" type="number" name="adress" placeholder="No of Bottles"/>
                                </div>
                                <div class="col-lg-6">
                                    <textarea class="form__field form__message" name="message" placeholder="Add Some Message Here!"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="form__submit" type="submit">Submit	</button>
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
