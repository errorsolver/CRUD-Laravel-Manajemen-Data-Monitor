@include('layout.head')
@include('layout.header')

<h3>Detail Monitor</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Seri Monitor</td>
            <td>{{ $monitor->seri }}</td>
        </tr>
        <tr>
            <td>Resolusi</td>
            <td>{{ $monitor->resolusi->nama }}</td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>{{ $monitor->harga }}</td>
        </tr>
    </tbody>
</table>

@include('layout.footer')
