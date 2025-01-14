@include('layout.head')
@include('layout.header')

<form action="{{ route('pembelian.store') }}" method="POST">
    @csrf

    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">

    <div class="form-group">
        <label>Barang:</label>
        <select name="monitor_id" id="">
            <option value="" selected disabled>Pilih Barang</option>
            @foreach ($monitor as $b)
                <option value="{{ $b->id }}">{{ $b->seri }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Jumlah:</label>
        <input type="number" value="" min="1" name="jumlah" id=""
            placeholder="Masukkan jumlah barang yang ingin dibeli">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
