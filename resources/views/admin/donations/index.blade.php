@extends('admin.layouts.master',['activePage'=>'donationIndex','title'=>'Requests - Bloodbank'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            @if(Session::has('message'))
                @if(Session::get('alert-type') == 'success')
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                        <span>
                      <i style="color: white" class="fa fa-check"></i>  {{Session::get('message')}}</span>
                    </div>
                @elseif(Session::get('alert-type') == 'error')
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                        <span>
                      <i style="color: white" class="fa fa-cut"></i>  {{Session::get('message')}}</span>
                    </div>

                @endif
            @endif

            <div class="row">
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Donations</h4>
                            <p class="card-category"> View All Donations</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">

                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Blood Group</th>
                                    <th>No of Bottles</th>
                                    <th>Created At</th>
                                    <th>Delete</th>

                                    </thead>
                                    <tbody>
                                    @foreach($donations as $donation)
                                        <tr>
                                            <td>{{$donation->id}}</td>
                                            <td class="text-primary"><a href="">{{$donation->user->name}}</a></td>
                                            <td>
                                            @foreach($requests as $request)
                                                @if($donation->blood_request_id == $request->id)
                                                {{$request->blood_type}}
                                                @endif
                                            @endforeach
                                            </td>
                                            <td>{{$donation->num_of_bottles}}</td>
                                            <td>{{$donation->created_at->diffForHumans()}}</td>
                                            <td>
                                                <form method="POST" action="{{route('admin.donation.destroy',$donation)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-round"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
