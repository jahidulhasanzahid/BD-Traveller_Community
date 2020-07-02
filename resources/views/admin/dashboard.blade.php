@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h1>Users</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <!-- <th scope="col">Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key=>$user)
                    <tr>
                        <th scope="row">{{$key++}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <!-- <td><a href="">Delete</a></td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
        <h1>Status</h1>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Posts Title</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Location</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($status as $key=>$post)
                <tr>
                    <th scope="row">{{$key++}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->location}}</td>
                    <td>
                    <a href="{{url('/status-delete',$post->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                        {{ __('Delete') }}
                                    </a>
                    <form id="delete-form" action="{{url('/status-delete',$post->id)}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

@endsection
