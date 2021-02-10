@extends('admin.layouts.master',['activePage'=>'requestIndex','title'=>'Requests - Bloodbank'])
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
                <a href="{{route('admin.request.create')}}" style="margin-left: 2%;" class="btn btn-primary pull-right">Add New Request</a>
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Requests</h4>
                            <p class="card-category"> View All Requests</p>
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
                                    @foreach($requests as $request)
                                        <tr>
                                            <td>{{$request->id}}</td>
                                            @foreach($users as $user)
                                                @if($user->id == $request->user_id)
                                                    <td class="text-primary"><a href="{{route('admin.request.edit',$request)}}">{{$user->name}}</a></td>
                                                @endif
                                            @endforeach
                                            <td>{{$request->blood_type}}</td>
                                            <td>{{$request->num_of_bottles}}</td>
                                            <td>{{$request->created_at->diffForHumans()}}</td>
                                            <td>
                                                <form method="POST" action="{{route('admin.request.destroy',$request)}}">
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
