@extends('admin.layouts.master',['activePage'=>'requestIndex','title'=>'Edit Request - Bloodbank'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Request</h4>
                            <p class="card-category">Edit your request</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('admin.request.update',$bloodRequest)}}">
                                @csrf()
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <select type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                                <option selected disabled>Select User</option>
                                                @foreach($users as $user)
                                                    <option value="{{$user->id == $bloodRequest->user_id ? $bloodRequest->user_id : ''}}" {{$user->id == $bloodRequest->user_id ? 'selected' : ''}}>{{$user->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select type="text" name="blood_type" class="form-control @error('blood_type') is-invalid @enderror">
                                                <option selected disabled>Select Blood Group</option>
                                                <option value="O-ve"{{$bloodRequest->blood_type == 'O-ve' ? 'selected' : ''}}>O-ve</option>
                                                <option value="O+ve"{{$bloodRequest->blood_type == 'O+ve' ? 'selected' : ''}}>O+ve</option>
                                                <option value="A-ve"{{$bloodRequest->blood_type == 'A-ve' ? 'selected' : ''}}>A-ve</option>
                                                <option value="A+ve"{{$bloodRequest->blood_type == 'A+ve' ? 'selected' : ''}}>A+ve</option>
                                                <option value="B-ve"{{$bloodRequest->blood_type == 'B-ve' ? 'selected' : ''}}>B-ve</option>
                                                <option value="B+ve"{{$bloodRequest->blood_type == 'B+ve' ? 'selected' : ''}}>B+ve</option>
                                                <option value="AB-ve"{{$bloodRequest->blood_type == 'AB-ve' ? 'selected' : ''}}>AB-ve</option>
                                                <option value="AB+ve"{{$bloodRequest->blood_type == 'AB+ve' ? 'selected' : ''}}>AB+ve</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Num of Bottles</label>
                                            <input type="text" name="num_of_bottles" class="form-control @error('num_of_bottles') is-invalid @enderror" value="{{$bloodRequest->num_of_bottles}}">
                                            @error('num_of_bottles')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Location</label>
                                            <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" value="{{$bloodRequest->location}}">
                                            @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Contact No</label>
                                            <input type="number" name="contact_number" value="{{$bloodRequest->contact_number}}" class="form-control @error('contact_number') is-invalid @enderror">
                                            @error('contact_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Message</label>
                                            <textarea type="message" name="message" class="form-control">{{$bloodRequest->message}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Create Request</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
