@extends('layouts.sidebar')

@section('content')
    <!-- Dynamic Content -->
    <section class="dashboard-contents">
        <div class="container" id="dynamic-content">
            @include($partial) <!-- This is where the partials will be loaded -->
        </div>
    </section>
@endsection
