<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotedController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', auth()->id())->latest()->get();
        return view('auth.noted.dashboard', compact('notes'));
    }
    public function show()
    {
        // contoh: ambil semua catatan milik user
        $notes = Note::where('user_id', auth()->id())->get();
        return view('auth.notes.show', compact('notes'));
    }
    public function create()
    {
        return view('auth.notes.create'); // Mengembalikan view untuk form "New Note"
    }
    public function store(Request $request)
{
    // Validasi request dulu
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    // Pastikan user login
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'You must be logged in to save a note.');
    }

    Note::create([
        'title' => $request->title,
        'content' => $request->content,
        'user_id' => auth()->id(),
    ]);

    return redirect()->route('noted.dashboard')->with('success', 'Note saved!');
}

        public function edit($id)
    {
        // Ambil data berdasarkan ID
        $note = Note::findOrFail($id);

        // Tampilkan view edit, misalnya:
        return view('auth.notes.edit', compact('note'));
    }

    //     public function update(Request $request, $id)
    // {
    //     $note = Note::findOrFail($id);
    //     $note->title = $request->input('title');
    //     $note->content = $request->input('content');
    //     $note->save();

    //     return redirect()->route('dashboard')->with('success', 'Note updated!');
    // }

}
