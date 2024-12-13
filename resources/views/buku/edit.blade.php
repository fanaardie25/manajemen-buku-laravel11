@include('layout.header')
<h3>Edit Buku</h3>
<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="judul">Judul Buku:</label>
        <input type="text" name="judul" id="judul" value="{{ $buku->judul }}">
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang:</label>
        <input type="text" name="pengarang" id="pengarang" value="{{ $buku->pengarang }}">
    </div>
    <div class="form-group">
        <label for="tahun">Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" id="tahun" value="{{ $buku->tahun_terbit }}">
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit:</label>
        <select name="penerbit_id" id="penerbit">
            @foreach($penerbit as $penerbits)
                <option value="{{ $penerbits->id }}" {{ ($penerbits->id == $buku->penerbit_id) ? 'selected' : '' }}>
                    {{ $penerbits->nama_penerbit }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="kategori">Kategori:</label>
        <select name="kategori_id" id="kategori">
            @foreach($kategori as $kategoris)
                <option value="{{ $kategoris->id }}" {{ ($kategoris->id == $buku->kategori_id) ? 'selected' : '' }}>
                    {{ $kategoris->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>
@include('layout.footer')
