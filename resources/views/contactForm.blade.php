<form method="POST" action="/api/contact">
    @csrf
    <input type="text" name="name" value="{{$name ?? ''}}">
    <input type="email" name="email" value="{{$email ?? ''}}">
    <textarea name="message"  cols="30" rows="10">{{$message ?? ''}}</textarea>
    <button type="submit">Send</button>
</form>
