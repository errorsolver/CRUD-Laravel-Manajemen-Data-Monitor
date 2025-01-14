@include('layout.head')
@include('layout.header')

<h3>Buat Resolusi</h3>

<form action="{{ route('resolusi.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nama Resolusi:</label>
        <input type="text" name="nama" id="" placeholder="Masukkan nama resolusi">
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
