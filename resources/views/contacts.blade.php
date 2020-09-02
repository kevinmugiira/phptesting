@extends('layouts/master')


@section('content')


    @forelse($people as $person)

        {{ $person }}

    @empty

        No one on list

    @endforelse

    @endsection
