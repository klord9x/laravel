@extends('layouts.root')
@section('title', 'Trang chủ')

@section('body')
    @include('alerts')
    @if (Auth::check())
        You are logged in.
    @else
        You are not logged in. {!! Html::link('login', 'Login') !!} or 
        {!! Html::link('signup', 'Sign up') !!}
    @endif

@endsection