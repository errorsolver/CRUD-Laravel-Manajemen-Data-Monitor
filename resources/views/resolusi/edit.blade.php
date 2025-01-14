@include('layout.head')
@include('layout.header')

<h3>Ubah Resolusi</h3>

<form action="{{ route('resolusi.update', $resolusi->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Nama Resolusi:</label>
        <input type="text" name="nama" id="" value="{{ $resolusi->nama }}">
    </div>

    <button type="submit" class="tombol">Update</button>
</form>

@include('layout.footer')
