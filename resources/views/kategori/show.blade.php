@include('layout.header')
        <h3>Detail Kategori</h3>
        <table>
            <tbody>
                    <tr>
                        <td width='150px'>Nama kategori</td>
                        <td width='2px'>:</td>
                        <td>{{ $kategori->nama_kategori }}</td>
                    </tr>
            </tbody>
        </table>
        @include('layout.footer')