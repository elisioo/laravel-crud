<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        return view('music.index', ['musics' => $musics]);
    }
    public function create()
    {
        return view('music.create');
    }

    public function edit(Music $music)
    {
        return view('music.edit', ['music' => $music]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
        ]);

        Music::create($request->all());

        return redirect()->route('music.index')->with('success', 'Music added successfully!');
    }
    public function update(Request $request, Music $music)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
        ]);

        $music->update($request->all());

        return redirect()->route('music.index')->with('success', 'Music updated successfully!');
    }
    public function destroy(Music $music)
    {
        $music->delete();
        return redirect()->route('music.index')->with('success', 'Music deleted successfully!');
    }
}
