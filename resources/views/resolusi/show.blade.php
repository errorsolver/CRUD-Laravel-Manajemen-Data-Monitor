@include('layout.head')
@include('layout.header')

<h3>Detail Resolusi</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Nama resolusi</td>
            <td>{{ $resolusi->nama }}</td>
        </tr>
    </tbody>
</table>

@include('layout.footer')
