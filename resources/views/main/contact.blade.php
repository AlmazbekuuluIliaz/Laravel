@extends('layouts.layout')
@section('content')
    <p>{{$contact['name']}}</p>
    <p>{{$contact['address']}}</p>
    <p>{{$contact['phone']}}</p>
    <p>{{$contact['email']}}</p>
@endsection