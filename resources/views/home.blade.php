@extends('layouts.sidebar')
@section('content')

@endsection
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Log Out</button>
</form>