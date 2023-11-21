<table class="table table-striped" border="1">
    <thead>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Harga</th>
        <th>Tgl. Terbit</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach ($data_buku as $buku)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp ".number_format($buku->harga,2,',','.') }}</td>
                <td>{{ $buku->tgl_terbit }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<table>
    <tr>
        <td>Jumlah</td>
        <td>:</td>
        <td>{{ $jumlah }}</td>
    </tr>
    <tr>
        <td>Total Harga</td>
        <td>:</td>
        <td>{{ $total_harga }}</td>
    </tr>
</table>
