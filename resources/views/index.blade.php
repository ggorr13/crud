@extends('layout')

@section('title','Users')

@section('content')
    <a class="btn btn-primary" role="button" href="{{route('users.create')}}">Create user</a>
    <table class="table table-dark table-sm mt-3">
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
                <th scope="row" >{{$user->id}}</th>
                <td>
                    <a href="{{route('users.show',$user)}}" class="text-decoration-none link-light">{{$user->name}}</a>
                </td>
                <td>
                    <a href="{{route('users.show',$user)}}" class="text-decoration-none link-light">{{$user->email}}</a>
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
    <div class="bg-dark"> {{$users->links()}}</div>
@endsection
