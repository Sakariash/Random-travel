@include('header')
@if ($errors->any())

<div class="container">
    <div class="login">
        <p>
            <u>{{ $errors->first() }}</u>
        </p>
        @endif

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