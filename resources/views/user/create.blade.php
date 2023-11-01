@extends('backend.layout')
@section('title2')
    Master
@endsection
@section('title')
    User
@endsection
@section('content')
<div class="row">
  <div class="col-lg-8 col-md-10 mx-auto">
    <div class="card card-primary card-outline">
      @include('alert.error')
      <div class="card-header">
        <h3 class="card-title">
          Create User
        </h3>
      </div>
      <div class="card-body">
        <form method="post" action="{{ route('user.store')}}">
          @csrf
            <div class="form-group">
              <input type="text" class="form-control form-control-border" id="name" name="name" placeholder="Nama" value="{{old('name')}}">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-border" id="username" name="username" placeholder="Username" value="{{old('username')}}">
            </div>
            <div class="form-group">
              <input type="email" class="form-control form-control-border" id="email" name="email" placeholder="Email" value="{{old('email')}}">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-border" id="password" name="password" placeholder="Password" value="{{old('password')}}">
            </div>
            <div class="form-group">
              {{-- <label for="level" class="ml-3">Level</label> --}}
              <select class="custom-select form-control-border" id="level" name="level">
                <option value="admin">Administrator</option>
                <option value="staff">Staff</option>
              </select>
            </div>
            <div class="text-right">
              <button type="reset" class="btn btn-danger">Cancel</button>
              <a href="{{route('user.index')}} " class="btn btn-warning">Back</a>
              <button type="submit" name="tombol" class="btn btn-success">Create</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection