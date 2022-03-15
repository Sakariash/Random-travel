@include('header')

<div class="back">
    <a href="/dashboard">back</a>
</div>

<div class="trips">
    <h1>Wishlist</h1>
    @foreach($list as $country_visited)
    <div>
        {{ $country_visited }}
        <div>
            <a href="/delete/{{$country_visited}}"> delete</a>
        </div>

        @endforeach
    </div>