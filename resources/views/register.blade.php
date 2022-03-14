@include('header')
<div class="container">
    <div class="form">
        <form method="post" action="register">
            @csrf

            <label for="name">Name</label>
            <input name="name" id="name" type="text" required />


            <label for="email">Email</label>
            <input name="email" id="email" type="email" required />

            <label for="password">Password</label>
            <input name="password" id="password" type="password" required />

            <button type="submit">Register</button>
        </form>
    </div>
</div>