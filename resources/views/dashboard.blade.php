@if ($errors->any())
<p>
    <u>{{$errors->first()}}</u>
</p>
@endif



<form method="post" action="random">
    @csrf
    <label for="name">continent</label>
    <select name="continent" id="continent" type="text">
        @foreach($continents as $key => $value)
        <option value={{$value->continent}}>{{$value->continent}}</option>
        @endforeach
    </select>
    <button>selcect</button>
</form>


<p>
    Hello, {{$user->name}}.<br><br> Would you like to <a href="logout">logout?</a>
</p>
