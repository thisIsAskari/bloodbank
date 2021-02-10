@extends('frontend.layouts.master')
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('frontend/img/causes.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/causes.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Donation</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">Blood Requests</span>
                                <h1 class="promo-primary__title"><span>Our</span> <span>Causes</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- causes inner start-->
        <section class="section causes-inner">
            <div class="container">
                <div class="row offset-margin">

                    @foreach($filteredRequests as $filteredrequest)
                        <div class="col-lg-6">

                            <div class="causes-item causes-item--style-2">
                                <div class="causes-item__body">
                                    <div class="causes-item__action">
                                        @foreach($users as $user)
                                            <h6 class="causes-item__title"> <a href="cause-details.html">{{$user->id == $filteredrequest->user_id ? $user->name : ''}}</a></h6>
                                        @endforeach
                                        <a class="button causes-item__button button--primary d-none d-sm-inline-block" href="{{route('donation.create',$filteredrequest->id)}}">+ Donate	</a>
                                    </div>
                                    <div class="causes-item__top">

                                        <p>{{Str::limit($filteredrequest->message,120,'...')}} </p>
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: {{$filteredrequest->percentage}}%;">
                                                <div class="progress-bar__value">{{$filteredrequest->percentage,2}}%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Blood Group: </span><span>{{$filteredrequest->blood_type}}</span></div>
                                            <div class="causes-item__details-item text-right"><span>No Of Bottles: </span><span>{{$filteredrequest->num_of_bottles}}</span></div>
                                        </div><a class="button causes-item__button button--primary d-sm-none" href="{{route('donation.create',$filteredrequest->id)}}">+ Donate	</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <!-- pagination start-->--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>--}}
{{--                            </li>--}}
{{--                            <li class="pagination__item"><span>1</span></li>--}}
{{--                            <li class="pagination__item pagination__item--active"><span>2</span></li>--}}
{{--                            <li class="pagination__item"><span>3</span></li>--}}
{{--                            <li class="pagination__item"><span>4</span></li>--}}
{{--                            <li class="pagination__item"><span>5</span></li>--}}
{{--                            <li class="pagination__item pagination__item--disabled">...</li>--}}
{{--                            <li class="pagination__item"><span>12</span></li>--}}
{{--                            <li class="pagination__item pagination__item--next"><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- pagination end-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </section>
        <!-- causes inner end-->
        <!-- bottom bg start-->
        <section class="bottom-background bottom-background--brown" style="background-image: url(img/bottom-bg.html)"></section>
        <!-- bottom bg end-->
    </main>
@endsection
