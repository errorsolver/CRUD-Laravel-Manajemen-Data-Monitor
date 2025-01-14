@include('layout.head')

<h1>Register</h1>
@if (session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif
<form action="{{ route('auth.store') }}" method="POST">
    @csrf
    <input type="hidden" name="register" value="1">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <p>Punya akun? <a href="{{ route('login') }}">Login</a></p>
    <br>
    <button class="tombol" type="submit">Register</button>
</form>

@include('layout.footer')
