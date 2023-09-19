<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
class NotesController extends Controller
{
    public function index() {
        $ctx = ['notes' => Note::latest()->get()];
        return view('notes', $ctx);
    }
    public function detail(Note $note_by_id) {
        return view('notes', ['notes' => [$note_by_id]]);
    }
    
    public function showAddNoteForm() {
        $ctx = ['notes' => Note::latest()->get()];
        return view('note_add', $ctx);
    }
    public function showEditNoteForm(Note $note) {
        return view('note_edit', ['note' => $note]);
    }
    public function updateNote(Request $request, Note $note) {
        $note->fill(['title' => $request->title,
        'content' => $request->content,
        'price' => $request->price]);
        $note->save();
        return redirect()->route('notes');
    }
    public function showDeleteNoteForm(Note $note) {
        return view('note_delete', ['note' => $note]);
    }
    public function destroyNote(Note $note) {
        $note->delete();
        return redirect()->route('home');
    }
    public function storeNote(Request $request) {
        $note = new Note();
        $note->create(['name' => $request->title, 'content' => $request->content, 'user_id' => auth()->id()]);
        return redirect()->route('notes');
    }
}
