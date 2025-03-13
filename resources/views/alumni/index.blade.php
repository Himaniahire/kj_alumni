@extends('alumni.layouts.layout')

@section('content')

    <h1>Welcome, {{ Auth::guard('alumni')->user()->name }} {{ Auth::guard('alumni')->user()->sname }}!</h1>

@endsection
