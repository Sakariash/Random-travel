@include('error')

<!-- <form method="get" action="random">
    @csrf
    <label for="name">continent</label>
    <select name="continent" id="continent" type="text">
        @foreach($continents as $key => $value)
        <option value={{$value->id}}>{{$value->continent}}</option>
        @endforeach
    </select>
    <button>selcect</button>
</form> -->
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
<form action="check" method="post">
    @csrf
    <input type="checkbox" class='form' value="{{$country}}" name="country" />

    <button>send</button>
</form>
@endif

<!-- add favourite / travel -->


<p>
    Hello, {{auth()->user()->name}}.<br><br> Would you like to <a href="/logout">logout?</a>
</p>
