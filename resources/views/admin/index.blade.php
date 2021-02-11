@extends('admin.layouts.master',['activePage'=>'dashboard','title'=>'Bloodbank - online blood donation'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">bubble_chart</i>
                            </div>
                            <p class="card-category">Requests</p>
                            <h3 class="card-title">{{count($requests)}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i>Last
{{--                                {{$last_request->created_at->diffForHumans()}}--}}
                                {{$last_request}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">bubble_chart</i>
                            </div>
                            <p class="card-category">Donations</p>
                            <h3 class="card-title">{{count($donations)}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> Last
{{--                                {{$last_donation->created_at->diffForHumans()}}--}}
                                {{$last_donation}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">person</i>
                            </div>
                            <p class="card-category">Users</p>
                            <h3 class="card-title">{{count($users)}}</h3>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i>Last
                                {{$last_user->created_at->diffForHumans()}}

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
