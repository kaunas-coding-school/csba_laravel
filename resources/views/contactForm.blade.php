<form method="POST" @if $editable ....action="/api/contact" @else {... }@endif >
    @csrf
    <input type="text" name="name" value="{{$item->name ?? ''}}">
    <input type="email" name="email" value="{{$email ?? ''}}">
    <textarea name="message"  cols="30" rows="10">{{$message ?? ''}}</textarea>
    <button type="submit">Send</button>
</form>
