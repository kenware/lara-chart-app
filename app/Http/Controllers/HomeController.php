<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use Cloudder;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function profile()
    {
        return view('profile')->with('navigation','true')->with('category','profile');
    }

    public function upload(UploadRequest $request)
    {  
        $user = Auth::user();
        $filename = $request->file('image');
        if($filename){
        $filename = $filename->getRealPath();
        Cloudder::upload($filename, null);
        $file_url= Cloudder::show(Cloudder::getPublicId());
        $user->name = $request->name;
     
        $user->user_image =$file_url;
        $user->save();
        return redirect()->back()->with('message','update successful');
        }else{
            $user->name = $request->name;
        
            $user->save();
            return redirect()->back()->with('message','update successful');
        }
    }
}
