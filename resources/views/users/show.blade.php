@extends('layouts.root')
@section('title', 'Trang chủ')
@section('body')
    <h1>Profile</h1> Your email address is {{ $user->email }}
@endsection

