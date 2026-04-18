<h2>Data Film</h2>

<a href="{{ route('films.create') }}">Tambah Film</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Poster</th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Tahun</th>
        <th>Sutradara</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>

    @foreach($films as $index => $film)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td><img src="{{ asset('storage/' . $film->poster) }}" width="30" height="40"></td>
        <td>{{ $film->judul }}</td>
        <td>{{ $film->genre }}</td>
        <td>{{ $film->tahun_rilis }}</td>
        <td>{{ $film->sutradara }}</td>
        <td>{{ $film->deskripsi }}</td>

        <td>
            <a href="{{ route('films.show', $film->id) }}">Detail</a>
            <a href="{{ route('films.edit', $film->id) }}">Edit</a>

            <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>