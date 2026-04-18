<h2>Tambah Film</h2>

<form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="judul" placeholder="Judul"><br>
    <input type="text" name="genre" placeholder="Genre"><br>
    <input type="number" name="tahun_rilis" placeholder="Tahun"><br>
    <input type="text" name="sutradara" placeholder="Sutradara"><br>
    <input type="text" name="negara" placeholder="Negara"><br>
    <input type="number" name="durasi" placeholder="Durasi"><br>
    <input type="number" step="0.1" name="rating" placeholder="Rating"><br>

    <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br>

    <input type="file" name="poster"><br><br>

    <button type="submit">Simpan</button>
</form>