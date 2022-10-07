@extends('layouts.app')

@section('content')
    Welcome to the back-office Homepage {{$user = Auth::user()->name}}
@endsection
