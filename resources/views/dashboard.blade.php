@include('header')
@include('errors')

<form action="/search" method="GET">
    <input type="search" name="search" placeholder="Search...">
    <button>Search</button>
</form>
@foreach($continents as $key => $value)


<div>
    <a href="/random/{{$value->continent}}">{{$value->continent}}
</div></a>
@endforeach

<br>

<!--Get search result-->
@if(isset($search))
{{$search[0]['country']}}
<form action="check/{{$search[0]['country']}}" method="post">
    @csrf
    <input type="checkbox" class='form' value="{{$search[0]['country']}}" name="country" />

    <button>send</button>
</form>
@endif
@if(isset($country))
<!-- {{ method_field('PUT') }} -->
{{$continent->continent}}--

<a href="/random/{{$continent->continent}}/{{$country}}">{{$country}}</a>

<a href="{{ route('random.country', $continent) }}">{{$country}}</a>'
<form action="check/{{$country}}" method="post">
    @csrf
    <input type="checkbox" class='form' value="{{$country}}" name="country" />

    <button>send</button>
</form>
@endif

<p>
    Hello, {{auth()->user()->name}}.<br><br> Would you like to <a href="/logout">logout?</a>
</p>
@if(isset($trip))

<br><br><br><br>

@foreach($destination as $location_id)
{{ $location_id }}

@endforeach
@endif
