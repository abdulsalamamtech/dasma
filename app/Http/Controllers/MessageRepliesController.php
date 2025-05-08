<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Http\Requests\StoreMessageRepliesRequest;
use App\Http\Requests\UpdateMessageRepliesRequest;
use App\Models\MessageReplies;

class MessageRepliesController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRepliesRequest $request)
    {
        $data = $request->validated();
        // Testing purpose
        $data['user_id'] = ActorHelper::getUserId();
        $messageReplies = MessageReplies::create($data);
        // Send Email To The Email
        $messageReplies->message()->update([
            'status' => 'replied',
        ]);

        // return redirect to message route
        return redirect()->route('admin.messages.index')->with('success', 'Reply sent successfully');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MessageReplies $messageReplies)
    {
        $messageReplies->delete();

        // redirect to message route
        return redirect()->route('admin.messages.index')->with('success', 'Reply deleted successfully');


    }
}
