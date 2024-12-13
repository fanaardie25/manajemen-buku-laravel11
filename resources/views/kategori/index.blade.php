@include('layout.header')
        <h3>Kategori</h3>
        <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allkategori as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->nama_kategori }}</td>
                        <td>
                            <form action="{{ route('kategori.destroy' ,$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('kategori.show' ,$item->id) }}" class="tombol">Detail</a>
                                <a href="{{ route('kategori.edit' ,$item->id) }}" class="tombol">Edit</a>
                                <button type="submit" class="tombol">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('layout.footer')