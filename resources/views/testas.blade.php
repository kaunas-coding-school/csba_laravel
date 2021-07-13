<html>
<body>
<h1>TODO List</h1>
@foreach ($list as $item)
    <div><input type="checkbox"> {{ $item->title }} [{{$item->description}}] - {{$item->status}}</div>
@endforeach
</body>
</html>
