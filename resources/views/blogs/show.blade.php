@extends('layouts.master')



@section('content')



    <a href="blog/{{ $blog->id }}"></a> <h1>{{$blog -> title}}</h1><a/>
    <p>{{$blog -> body}}</p>


    @stop
