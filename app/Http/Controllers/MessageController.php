<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * [Admin] Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::with(['messageReplies.user'])->latest()->paginate();
        return view('dashboard.pages.messages.index', [
            'messages' => $messages,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        $data = $request->validated();
        $message = Message::create($data);
        return $this->show($message);
    }

    /**
     * Display the form resource.
     */
    public function create()
    {
        return view('dasma.contact');
    }    

    /**
     * Display the specified resource.
     */
    public function show(?Message $message)
    {
        // It's taking two request to go away
        // session()->flash('success', 'message sent!');
        return view('dasma.contact', [
            'message' => $message,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * [Admin] Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        
        $message->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Message deleted successfully');
    }
}
