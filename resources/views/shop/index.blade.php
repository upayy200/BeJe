@extends('layout.app')

@if (Auth::check())
    @include('layout.navbar')
@endif


@section('title', 'opatdualima | dibareli')

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">LOGOUT</button>
</form>
