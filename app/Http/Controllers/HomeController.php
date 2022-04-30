<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Console\Command;

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
    public function index()
    {
        return view('home');
    }
    //post description
    // function description(Request $request,$slug,$postId){
    //     $description=Post::find($postId);
    //     return view('description',['description'=>$description]);
    // }
    //save comment
    // function save_comment(Request $request,$slug,$id){
    //     $request->validate([
    //             'comment'=>'required'
    //         ]);
    //     $data=new Comment;
    //     $data->user_id=$request->user()->id;
    //     $data->post_Sid=$id;
    //     $data->comment=$request->comment;
    //     $data->save();
    //     return redirect('description/'.$slug.'/'.$id)->with('success','Comment has been submitted.');
    // }
}
