@include('layout.head')
@include('layout.header')

<h3>Ubah Monitor</h3>

<form action="{{ route('monitor.update', $monitor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="">Seri Monitor:</label>
        <input type="text" name="seri" id="" placeholder="Masukkan seri monitor" value="{{ $monitor->seri }}">
    </div>

    <div class="form-group">
        <label for="">Resolusi:</label>
        <select name="resolusi_id" id="">
            @foreach ($resolusi as $k)
                <option value="{{ $k->id }}" {{ $p->id == $monitor->resolusi_id ? 'selected' : '' }}>
                    {{ $k->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Harga Monitor:</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga monitor"
            value="{{ $k->harga }}">
    </div>

    <button type="submit" class="tombol">Submit</button>

</form>

@include('layout.footer')
