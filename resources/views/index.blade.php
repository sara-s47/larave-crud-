@extends('layouts.layout')
@section('content')
<table  class="table table-dark table-striped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th rowspan="2">action</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><a href="{{route('user.view' , ['id'=> $user->id] )}}" class="btn btn-primary">view</a></td>
            <td><a href="{{route('user.edit' , ['id'=>$user->id])}}" class="btn btn-warning">edit</a></td>
            <td>
                <form action="{{route('user.delete', ['id'=>$user->id] )}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit"  class="btn btn-danger">delete</button>
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@endsection