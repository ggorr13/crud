@extends('layout')

@section('title','Users')

@section('content')
    <a class="btn btn-primary" role="button" href="{{route('users.create')}}">Create user</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Home</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>
                    <a href="{{route('users.show',$user)}}">{{$user->name}}</a>
                </td>
                <td>
                    <a href="{{route('users.show',$user)}}">{{$user->email}}</a>
                </td>
                <td>
                    <a type="button" href="{{route('users.edit',$user)}}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
