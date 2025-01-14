@include('layout.head')

<h1>Login</h1>
@if (session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif
<form action="{{ route('auth.store') }}" method="POST">
    @csrf
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
    <br>
    <button class="tombol" type="submit">Login</button>
</form>

@include('layout.footer')
