@if ($errors->any())
<p>
    <u>{{$errors->first()}}</u>
</p>
@endif

@foreach($continents as $key => $value)
<form action="" method="post"></form>
<a href=""><button>{{$value->continent}}</button></a>
@endforeach


<p>
    Hello, {{$user->id}}.<br><br> Would you like to <a href="logout">logout?</a>
</p>
