@include('header')
@include('errors')
<div class="content-container">
    <div class="header">
        Hello, {{auth()->user()->name}}
        <h1>Where do you want to travel next?</h1>
        <p>Search for a country or press a continent to get a suggestion</p>
    </div>
    <div class="content">
        <form action="/search" method="GET">
            <input type="search" name="search" placeholder="Select...">
            <button>Add to wishlist</button>
        </form>
    </div>
    @foreach($continents as $key => $value)
    <div>
        <a href="/random/{{$value->continent}}">{{$value->continent}}
        </a>
    </div>
    @endforeach
    <br>
    <!--Get search result-->
    @if(isset($search))
    <form action="/random/check/{{$search[0]['country']}}" method="post">
        @csrf
        <input type="checkbox" class='form' value="{{$search[0]['country']}}" name="country" />

        <button>send</button>
    </form>
    @endif
    @if(isset($country))
    {{$continent->continent}} --
    <a href="check/{{$country}}">{{$country}}</a>
    @endif

    <p class="logout">
        Would you like to <a href="/logout">logout?</a>
    </p>

</div>