@include('layout.header')
        <h3>Buat Buku</h3>
       <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul Buku:</label>
            <input type="text" name="judul" id="judul" placeholder="Masukan Judul buku">
        </div>
        <div class="form-group">
            <label for="pengarang">Pengarang:</label>
            <input type="text" name="pengarang" id="pengarang" placeholder="Masukan pengarang buku">
        </div>
        <div class="form-group">
            <label for="tahun">tahun terbit:</label>
            <input type="text" name="tahun_terbit" id="tahun" placeholder="Masukan tahun buku">
        </div>
        <div class="form-group">
            <label for="">Penerbit:</label>
            <select name="penerbit_id" id="">
                @foreach($penerbit as $penerbits)
                    <option value="{{ $penerbits->id }}">{{ $penerbits->nama_penerbit }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kategori">kategori:</label>
            <select name="kategori_id" id="">
                @foreach($kategori as $kategoris)
                    <option value="{{ $kategoris->id }}">{{ $kategoris->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="tombol">Submit</button>
       </form>
        @include('layout.footer')