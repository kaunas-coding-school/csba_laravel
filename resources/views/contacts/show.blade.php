@extends('layouts.master');

@section('content')
    <a href="{{ route('contacts.show', $id)  }}">
        {{ $name ?? '' }}  - [{{$email ?? ''}}] - {{$message ?? ''}}
    </a>
    <a href="{{ route('contacts.edit', $id)  }}">
        [Edit]
    </a>
    <form action="{{ route('contacts.destroy', ['contact' => $id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Destroy">
    </form>
@endsection
