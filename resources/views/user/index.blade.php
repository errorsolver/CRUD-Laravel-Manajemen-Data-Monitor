@include('layout.head')
@include('layout.header')

<h3>User yang bergabung</h3>
<a href="{{ route('register') }}" class="tombol">Tambah</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Tanggal Bergabung</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item => $i)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $i->username }}</td>
                <td>{{ $i->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('layout.footer')
