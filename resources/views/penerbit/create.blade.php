@include('layout.header')
        <h3>Buat Penerbit</h3>
       <form action="{{ route('penerbit.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_penerbit">Nama Penerbit</label>
            <input type="text" name="nama_penerbit" id="nama_penerbit" placeholder="Nama penerbit">
        </div>
        <button type="submit" class="tombol">Submit</button>
       </form>
        @include('layout.footer')