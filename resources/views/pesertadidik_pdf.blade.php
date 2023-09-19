<table width="100%" border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>NIS</th>
        <th>Nama Lengkap</th>
        <th>L/P</th>
        <th>Nilai</th>
    </tr>
    @foreach ($pesertaM as $peserta)
    <tr>
        <td>{{ $peserta->nis }}</td>
        <td>{{ $peserta->namalengkap }}</td>
        <td>{{ $peserta->jk }}</td>
        <td>{{ $peserta->nilai }}</td>
    </tr>
    @endforeach
</table>