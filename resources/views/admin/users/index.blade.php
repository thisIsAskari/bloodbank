@extends('admin.layouts.master',['activePage'=>'userIndex','title'=>'Users - Bloodbank'])
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
                <a href="{{route('user.create')}}" style="margin-left: 2%;" class="btn btn-primary pull-right">Add New User</a>
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Users</h4>
                            <p class="card-category"> View All Users</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">

                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Delete</th>

                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td class="text-primary"><a href="{{route('user.edit',$user)}}">{{$user->name}}</a></td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                        <td>
                                            <form method="POST" action="{{route('user.destroy',$user)}}">
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
