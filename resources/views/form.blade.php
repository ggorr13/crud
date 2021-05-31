@extends('layout')

@section('title', isset($user) ? 'Update '.$user->name : 'Create user')

@section('content')

    <a href="{{route('users.index')}}" class="btn btn-secondary">Back to users</a>

    <form method="post" class="mt-3"
        @if(isset($user))
            action="{{route('users.update',$user)}}">
        @else
            action="{{route('users.store')}}">
        @endif

        @csrf

        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name" value="{{isset($user) ? $user->name : null}}"
                       type="text" class="form-control" placeholder="Enter name" aria-label="name">
                @error('name')
                    <div class="alert alert-danger mt-1">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                    <input name="email"  value="{{isset($user) ? $user->email : null}}"
                           type="text" class="form-control" placeholder="Enter email" aria-label="email">
                @error('email')
                <div class="alert alert-danger mt-1">{{$message}}</div>
                @enderror
               </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </form>

@endsection
