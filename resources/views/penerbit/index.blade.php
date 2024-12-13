@include('layout.header')
        <h3>Penerbit</h3>
        <a href="{{ route('penerbit.create') }}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allpenerbit as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->nama_penerbit }}</td>
                        <td>
                            <form action="{{ route('penerbit.destroy' ,$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('penerbit.show' ,$item->id) }}" class="tombol">Detail</a>
                                <a href="{{ route('penerbit.edit' ,$item->id) }}" class="tombol">Edit</a>
                                <button type="submit" class="tombol">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('layout.footer')