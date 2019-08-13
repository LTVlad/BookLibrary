@extends('layouts.layout')

@section('title')

    My book list

@endsection

@section('content')

    <h1>My book list</h1>

    <ul>

        @foreach($books as $book)
            <li>

                <p> {{ $book->name }} </p>

            </li>

        @endforeach

    </ul>


@endsection