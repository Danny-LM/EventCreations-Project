@extends('layouts.sidebar')

@section('content')
    <!-- Dynamic Content -->
    <section class="dashboard-contents">
        <div class="container" id="dynamic-content">
            @isset($content)
                @include($content) <!-- This is where the partials will be loaded -->
            @else
                @include('partials.user.home')
            @endisset
        </div>
    </section>
@endsection
