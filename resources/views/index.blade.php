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
                    <a href="{{route('users.show',$user)}}" class="nav-link">{{$user->name}}</a>
                </td>
                <td>
                    <a href="{{route('users.show',$user)}}" class="nav-link">{{$user->email}}</a>
                </td>
                <td>
                    <form method="post" action="{{route('users.destroy',$user)}}">
                        @csrf
                        @method('Delete')
                        <a type="button" href="{{route('users.edit',$user)}}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
