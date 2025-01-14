@include('layout.head')
@include('layout.header')

<h3>Resolusi</h3>
<a href="{{ route('resolusi.create') }}" class="tombol">Tambah</a>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Resolusi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allResolusi as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->nama }}</td>
                <td>
                    <form action="{{ route('resolusi.destroy', $r->id) }}" class="aksi" method="POST">
                        <a href="{{ route('resolusi.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('resolusi.edit', $r->id) }}" class="tombol">Edit</a>
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
