<h2>Detail Film</h2>

<p>Judul: {{ $film->judul }}</p>
<p>Genre: {{ $film->genre }}</p>
<p>Tahun: {{ $film->tahun_rilis }}</p>
<p>Sutradara: {{ $film->sutradara }}</p>
<p>Negara: {{ $film->negara }}</p>
<p>Durasi: {{ $film->durasi }} menit</p>
<p>Rating: {{ $film->rating }}</p>
<p>Deskripsi: {{ $film->deskripsi }}</p>

@if($film->poster)
    <img src="{{ asset('storage/' . $film->poster) }}" width="150">
@endif

<br><br>
<a href="{{ route('films.index') }}">Kembali</a>