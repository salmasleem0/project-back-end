@extends("layouts.frontend")
@section('content')
<h1>all users</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">created at</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
      <tr>
        <th scope="row">1</th>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->created_at}}</td> 
        @endforeach
        <a class="btn btn-dark" href="/dashboard">back</a>
        @endsection