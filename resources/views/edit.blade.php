@extends('layouts.layout')

@section('content')
    <form action="{{ route('user.update', ['id' => $user['id']]) }}" method="post" class="form-control">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user['name']}}">
            @error('name')
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
          </div>
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user['email']}}">
            @error('email')
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            @error('password')
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
