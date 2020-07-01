@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key=>$user)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>Edit</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container">
    <h1>Posts</h1>
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
                <th scope="row">1</th>
                <td>{{$post->title}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->location}}</td>
                <td>Edit</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
