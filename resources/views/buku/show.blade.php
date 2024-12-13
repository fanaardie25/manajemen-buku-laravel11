@include('layout.header')
        <h3>Detail Buku</h3>
        <table>
            <tbody>
                    <tr>
                        <td width='150px'>Judul buku:</td>
                        <td width='2px'>:</td>
                        <td>{{ $buku->judul }}</td>
                    </tr>
                    <tr>
                        <td>Pengarang:</td>
                        <td>:</td>
                        <td>{{ $buku->pengarang }}</td>
                    </tr>
                    <tr>
                        <td>Tahun terbit:</td>
                        <td>:</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                    </tr>
                    <tr>
                        <td>Kategori:</td>
                        <td>:</td>
                        <td>{{ $buku->kategori->nama_kategori }}</td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>:</td>
                        <td>{{ $buku->penerbit->nama_penerbit }}</td>
                    </tr>
            </tbody>
        </table>
        @include('layout.footer')