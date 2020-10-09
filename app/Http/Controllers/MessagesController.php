<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        //initialize realtime database
        $database = app('firebase.database');

        //retrieving data
        $reference = $database->getReference('event/messages');
        $snapshot = $reference->getSnapshot();
        $value = $snapshot->getValue();

        //dd($value);

        return view('chat.show',[]);

    }

    public function store()
    {

        $attributes = request()->validate(['message' => 'required|max:255']);

        $message = Message::create([
            'event_id' => 1,
            'from'=> auth()->id(),
            'seen' => 0,
            'message' => $attributes['message']
        ]);

        return redirect()->route('chat');
    }
}
