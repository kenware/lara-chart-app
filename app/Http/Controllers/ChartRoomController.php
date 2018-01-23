<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Room;

class ChartRoomController extends Controller
{
    //

    public function index()
    {
        $title = Room::orderBy('id','desc')->get();
        if($title){
            $titles = $title;
        }else{
            $titles =array(
                "foo" => "bar",
                "bar" => "foo",
             );
        }
        return view('welcome')
        ->with('titles',$titles)->with('navigation',false);
    }
    public function createRoom(Request $request)
    {
        $titles = Room::orderBy('id','desc')->get();
        if (Room::where('name', '=',$request->name)->count() > 0) {
           
            return redirect()->back()->with('status','chart with name/title "'.$request->name.'" already exist');
         }
         
        $user= Auth::user();
        $room = new Room;
        $room->name=$request->name;
        $room->user_name=$user->username;
        $room->user_image=$user->user_image;
        $room->category=$request->category;
        $user->room()->save($room);
        return redirect()->back()->with('status','Chart room created');
    }
    public function category($category)
    {
        $titles = Room::where('category', '=',$category)->orderBy('id','desc')->get();
        return view('welcome')
        ->with('titles',$titles)->with('navigation','true')->with('category',$category);
    }
}
