<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function noteList(){
        $notes=\App\Note::all();
        return view('note.noteList',[
            'notes' => $notes
        ]);
    }

    public function noteCreate(){
        return view('note.noteCreate');
    }

    public function onNoteCreate(){
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $note=new \App\Note();
        $note->title=request('title');
        $note->body=request('body');
        $note->save();
        return redirect('/');
    }
}
