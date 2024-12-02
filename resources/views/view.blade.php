@extends('layouts.layout')
@section('content')
    <table class="table table-dark table-striped">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>

            </tr>
        </tbody>
    </table>
@endsection
