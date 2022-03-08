@if ($errors->any())
<p>
    <u>{{$errors->first()}}</u>
</p>
@endif

<p>
    Hello, {{$user->name}}. Would you like to <a href="logout">logout?</a>
</p>
