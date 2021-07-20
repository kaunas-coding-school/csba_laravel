@extends('layouts.master');

@section('content')
    <h1>Contacts List</h1>
    <a href="{{route('contacts.create')}}">[Create]</a><br>
    @foreach ($list as $item)
        <div>
            <a href="{{ route('contacts.show', $item->id)  }}">
                {{ $item->name }}  - [{{$item->email}}] - {{$item->message}}
            </a>
            <a href="{{ route('contacts.edit', $item->id)  }}">
                [Edit]
            </a>
            @if($function_a_state)
            <form action="{{ route('contacts.destroy', ['contact' => $item->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Destroy">
            </form>
            @endif
        </div>

    @endforeach
@endsection
