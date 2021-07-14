@extends('layouts.secondary')

@section('title', 'Todo list')

@section('content')
    @parent
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
    <h1>TODO List</h1>
    @foreach ($list as $item)

        <div class="{{$item->status}}">
            <input type="checkbox"> {{ $item->title }} [{{$item->description}}] - {{$item->status}}
            <a href="{{ route('todo.edit', ['todoItem' => $item->id])  }}">
                <i class='bx bxs-edit-alt'></i>
            </a>
            <a href="{{ route('todo.done', ['todoItem' => $item->id])  }}">
                <i class='bx bx-check'></i>
            </a>
        </div>


    @endforeach
@endsection
