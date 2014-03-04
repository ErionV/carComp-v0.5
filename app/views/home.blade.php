@extends('layouts.main')

@section('content')
<div class="col-lg-10">

    @if(Auth::check())
        <h2>Welcome {{ Auth::user()->username }}</h2>
    @else
        <h2>Home Page</h2>
    @endif
</div>
@stop