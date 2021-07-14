@extends('layouts.master');

@section('content')
    <a href="{{ route('contacts.index')  }}">
        [back]
    </a>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        <input type="text" name="name" value="">
        <input type="text" name="email" value="">
        <input type="text" name="message" value="">

        <input type="submit" value="Create">
    </form>
@endsection
