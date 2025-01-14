@include('layout.head')
@include('layout.header')

<h3>Riwayat Pembelian</h3>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Seri</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if ($data->isEmpty())
            <tr>
                <td class="text-center" colspan="100%">
                    Belum ada barang yang dibeli
                </td>
            </tr>
        @else
            @foreach ($data as $key => $r)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        {{ $r->monitor->seri }}
                    </td>
                    <td>
                        {{ $r->jumlah }}
                    </td>
                    <td>
                        {{ $r->harga_total }}
                    </td>
                    <td>
                        <form action="" class="aksi">
                            <a href="{{ route('pembelian.show', $r->id) }}" class="tombol">Detail</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

@include('layout.footer')
