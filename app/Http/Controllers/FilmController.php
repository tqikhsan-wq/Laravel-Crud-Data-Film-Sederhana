<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::latest()->paginate(5);
        return view('films.index', compact('films'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'genre' => 'required|max:100',
            'tahun_rilis' => 'required|numeric',
            'sutradara' => 'required|max:255',
            'negara' => 'required|max:100',
            'durasi' => 'required|numeric',
            'rating' => 'nullable|numeric|min:0|max:10',
            'deskripsi' => 'nullable',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Upload poster
        if ($request->hasFile('poster')) {
            $validated['poster'] = $request->file('poster')->store('posters', 'public');
        }

        Film::create($validated);

        return redirect()->route('films.index')->with('success', 'Film berhasil ditambahkan');
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    public function update(Request $request, Film $film)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'genre' => 'required|max:100',
            'tahun_rilis' => 'required|numeric',
            'sutradara' => 'required|max:255',
            'negara' => 'required|max:100',
            'durasi' => 'required|numeric',
            'rating' => 'nullable|numeric|min:0|max:10',
            'deskripsi' => 'nullable',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // kalau upload poster baru
        if ($request->hasFile('poster')) {

            // hapus poster lama kalau ada
            if ($film->poster && Storage::disk('public')->exists($film->poster)) {
                Storage::disk('public')->delete($film->poster);
            }

            $validated['poster'] = $request->file('poster')->store('posters', 'public');
        }

        $film->update($validated);

        return redirect()->route('films.index')->with('success', 'Film berhasil diupdate');
    }

    public function destroy(Film $film)
    {
        // hapus poster juga
        if ($film->poster && Storage::disk('public')->exists($film->poster)) {
            Storage::disk('public')->delete($film->poster);
        }

        $film->delete();

        return redirect()->route('films.index')->with('success', 'Film berhasil dihapus');
    }
}