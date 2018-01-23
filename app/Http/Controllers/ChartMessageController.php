<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Message;
use App\Room;
use App\Replie;
use Auth;
class ChartMessageController extends Controller
{
    //
    public function message($id)
    {
        $room = Room::find($id);
       $messages = $room->messages()->get();
        return view('message')
        ->with('messages',$messages)->with('navigation',$room);
    }

    public function createMessage(Request $request)
    {
        if(Auth::user()){
        $id = $request->id;
        $room = Room::find($id);
        $user= Auth::user();
        $message = new Message;
        $message->message=$request->message;
        $message->user_name=$user->username;
        $message->user_image=$user->user_image;
        $message->user_id=$user->id;
        $room->messages()->save($message);
        return  redirect()->back();

        }else{
            return redirect()->back()->with('login','Please login to chart');
        }
    }
    public function reply($id)
    {
     
        $message = Message::find($id);
        $room = $message->room()->find($message->room_id);
       $reply = $message->replies()->get();
        return view('reply')
        ->with('replies',$reply)->with('message',$message)->with('navigation',$room);
    }


public function sendReply(Request $request)
{
    $validator = Validator::make($request->all(), [
        'message' => 'required'
    ]);

    if ($validator->fails()) {
        return Redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
    }

    if(Auth::user()){
    $id = $request->id;
    $message = Message::find($id);
    $user= Auth::user();
    $reply = new Replie;
    $reply->reply=$request->message;
    $reply->user_name=$user->username;
    $reply->user_image=$user->user_image;
    $reply->user_id=$user->id;
    $message->replies()->save($reply);
    return  redirect()->back();

    }else{
        return redirect()->back()->with('login','Please login to reply');
    }
}
}