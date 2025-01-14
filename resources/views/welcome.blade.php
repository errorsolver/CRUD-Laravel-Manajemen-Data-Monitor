@include('layout.head')

<h1>
    <span>
        Selamat datang di
    </span>
    Jual Beli Monitor
</h1>

<div class="d-flex justify-content-center gap-5">
    <a class="tombol py-2 px-3 w-25 text-center" href="{{ route('login') }}">Login</a>
    <a class="tombol py-2 px-3 w-25 text-center" href="{{ route('register') }}">Register</a>
</div>

@include('layout.footer')
