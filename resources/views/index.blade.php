@extends('layouts.html_frame')

@section('content')
<div id='content'>	
    @include('dashboard.top')
    @include('dashboard.summary')
    @include('dashboard.main_menu')
</div>
@endsection