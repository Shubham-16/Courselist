@extends('layout')
@section('title','home')
@section('content')
<h1>Home Page</h1>
<ul>
    @foreach($languages as $lang)
    <li>{{$lang}}</li>
    @endforeach
</ul>
{!!$Services!!}
{{$desc}}
@endsection('content')
