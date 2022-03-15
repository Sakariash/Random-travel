<a href="/dashboard">back</a>

@foreach($list as $country_visited)
<div>
    {{ $country_visited }}
    <div>
        <a href="/delete/{{$country_visited}}"> delete</a>
    </div>
</div>
@endforeach
