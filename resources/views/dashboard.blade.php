@include('errors')

@foreach($continents as $key => $value)
<div>
    <a href="/random/{{$value->continent}}">{{$value->continent}}
</div></a>
@endforeach

<br>
@if(isset($country))

<!-- {{ method_field('PUT') }} -->
{{$continent->continent}}--
<a href="/random/{{$continent->continent}}/{{$country}}">{{$country}}</a>
<form action="check/{{$country}}" method="post">
    @csrf
    <input type="checkbox" class='form' value="{{$country}}" name="country" />

    <button>send</button>
</form>

<input type="checkbox" name="country" value="{{$country}}" @checked(old('check')) />
@endif

<!-- add favourite / travel -->


<p>
    Hello, {{auth()->user()->name}}.<br><br> Would you like to <a href="/logout">logout?</a>
</p>
