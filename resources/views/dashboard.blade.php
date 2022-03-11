@if ($errors->any())
<p>
    <u>{{$errors->first()}}</u>
</p>
@endif

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
{{$continent->continent}}--
<a href="/random/{{$continent->continent}}/{{$country}}">{{$country}}</a>
@endif

<!-- add favourite / travel -->


<p>
    Hello, {{auth()->user()->name}}.<br><br> Would you like to <a href="/logout">logout?</a>
</p>
