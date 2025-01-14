@include('layout.head')
@include('layout.header')

<h3>Monitor</h3>
<a href="{{ route('monitor.create') }}" class="tombol">Tambah</a>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Seri Monitor</th>
            <th>Resolusi</th>
            <th>Stock</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allMonitor as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->seri }}</td>
                <td>{{ $r->resolusi->nama }}</td>
                <td>{{ $r->stock }}</td>
                <td>{{ $r->harga }}</td>
                <td>
                    <form action="{{ route('monitor.destroy', $r->id) }}" class="aksi" method="POST">
                        <a href="{{ route('monitor.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('monitor.edit', $r->id) }}" class="tombol">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('layout.footer')
