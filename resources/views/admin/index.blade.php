@extends('admin.layouts.layout')

@section('content')

    <h1>Welcome, {{ Auth::guard('web')->user()->name }} {{ Auth::guard('web')->user()->sname }}!</h1>

@endsection
