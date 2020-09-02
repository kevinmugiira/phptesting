@extends('layouts/master')



@section('content')

    <h1>My Latest Blogs</h1>

    @foreach($blogs as $blog)
        <a href="/blogs/{{$blog -> id}}"><h3>{{$blog -> title}}</h3><a/>
        <p>{{$blog -> body}}</p>
    @endforeach

    <p>Here comes mary Poppins with her stupid dress.</p>



    @endsection
