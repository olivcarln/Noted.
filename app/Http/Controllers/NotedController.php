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
    public function show() {
        return view('auth.noted.show');
    }
    public function create()
    {
        return view('auth.noted.create'); // Mengembalikan view untuk form "New Note"
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        Note::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect()->route('noted.dashboard')->with('success', 'Catatan berhasil disimpan!');
    }
}
