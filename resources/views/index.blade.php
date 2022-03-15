@include('header')
@if ($errors->any())

<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif
<div class="container">
    <div class="login">
        <form method="post" action="login">
            @csrf

            <label for="email">Email</label>
            <input name="email" id="email" type="email" />

            <label for="password">Password</label>
            <input name="password" id="password" type="password" />

            <button type="submit">Login</button>
        </form>

        <p>
            Not a member? <a href="register">Sign up</a>
        </p>
    </div>
</div>