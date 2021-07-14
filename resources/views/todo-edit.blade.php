@extends('layouts.master')

@section('content')
    <h1>Edit {{$title}}</h1>
    <form action="{{ route('todo.update', ['todoItem' => $id]) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="title" value="{{$title ?? ''}}">
        <input type="text" name="description" value="{{$description ?? ''}}">
        <a href="{{ route('todo.done', ['todoItem' => $id])  }}">
            <i class='bx bx-check'></i> DONE
        </a>
        <input type="submit" value="Update">
    </form>
@endSection
