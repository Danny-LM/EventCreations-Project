@extends('layouts.master')
@section('content')
<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Key name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->key_name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection