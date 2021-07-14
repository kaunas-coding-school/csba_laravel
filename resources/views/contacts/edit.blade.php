@extends('layouts.master');

@section('content')
    <a href="{{ route('contacts.index')  }}">
        [back]
    </a>
    <form action="{{ route('contacts.update', ['contact' => $id]) }}" method="POST">
        @method('PUT')
        @csrf

        <input type="text" name="name" value="{{$name ?? ''}}">
        <input type="text" name="email" value="{{$email ?? ''}}">
        <input type="text" name="message" value="{{$message ?? ''}}">

        <input type="submit" value="Update">
    </form>
@endsection
