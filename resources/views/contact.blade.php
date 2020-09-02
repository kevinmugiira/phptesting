@extends('layouts.master')



@section('content')

    @foreach($people as $person)

    {{ $person }}

    @endforeach


    @stop

