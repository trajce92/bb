@extends('layouts.app')

@section('content')
<form method='post' action="{{url('/'.Auth::user()->id.'/profile')}}">
	{{csrf_field()}}
  <div class="form-group">
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" value=''>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value='{{$data->email}}'>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Old Password</label>
    <input type="password" name="old_password" class="form-control" id="exampleInputPassword1" placeholder="Enter old password" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter new password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="name" class="form-control" id="usernameInput" aria-describedby="emailHelp" placeholder="Enter username" value="{{$data->name}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection