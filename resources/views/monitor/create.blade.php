@include('layout.head')
@include('layout.header')

<h3>Buat Monitor</h3>

<form action="{{ route('monitor.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="">Seri Monitor:</label>
        <input type="text" name="seri" id="" placeholder="Masukkan seri monitor">
    </div>

    <div class="form-group">
        <label for="">Resolusi:</label>
        <select name="resolusi_id" id="">
            <option value="Pilih resolusi" selected disabled>Pilih resolusi</option>
            @foreach ($resolusi as $k)
                <option value="{{ $k->id }}">{{ $k->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Stock Monitor:</label>
        <input type="number" name="stock" id="" min="0" placeholder="Masukkan stock monitor">
    </div>

    <div class="form-group">
        <label for="">Harga Monitor:</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga monitor">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
