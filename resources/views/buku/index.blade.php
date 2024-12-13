@include('layout.header')
        <h3>Buku</h3>
        <a href="{{ route('buku.create') }}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul buku</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                    <th>Penerbit</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allbuku as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->pengarang }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                        <td>{{ $item->penerbit->nama_penerbit }}</td>
                        <td>{{ $item->kategori->nama_kategori }}</td>
                        <td>
                            <form action="{{ route('buku.destroy' ,$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('buku.show' ,$item->id) }}" class="tombol">Detail</a>
                                <a href="{{ route('buku.edit' ,$item->id) }}" class="tombol">Edit</a>
                                <button type="submit" class="tombol">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('layout.footer')