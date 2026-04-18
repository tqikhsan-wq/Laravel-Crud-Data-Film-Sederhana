<h2>Edit Film</h2>

<form action="{{ route('films.update', $film->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="judul" value="{{ $film->judul }}"><br>
    <input type="text" name="genre" value="{{ $film->genre }}"><br>
    <input type="number" name="tahun_rilis" value="{{ $film->tahun_rilis }}"><br>
    <input type="text" name="sutradara" value="{{ $film->sutradara }}"><br>
    <input type="text" name="negara" value="{{ $film->negara }}"><br>
    <input type="number" name="durasi" value="{{ $film->durasi }}"><br>
    <input type="number" step="0.1" name="rating" value="{{ $film->rating }}"><br>

    <textarea name="deskripsi">{{ $film->deskripsi }}</textarea><br>

    <input type="file" name="poster"><br><br>

    <button type="submit">Update</button>
</form>