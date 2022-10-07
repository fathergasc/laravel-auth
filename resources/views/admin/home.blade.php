@extends('layouts.app')

@section('content')
    <h1>Welcome to the back-office Homepage {{$user = Auth::user()->name}}</h1>
@endsection
