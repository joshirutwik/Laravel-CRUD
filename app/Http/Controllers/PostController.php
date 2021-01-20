<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //
    function Edit2(Request $req)
    {
        $data = Post::find($req->id);
        $data->name = $req->name;
        $data->number = $req->number;
        $data->save();
        return redirect('/Read');
    }
    function Edi($id)
    {
        $data = Post::find($id);
        return view('edit',['posts'=>$data]);
    }
    function Del($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect('/Read');
        // Redirect means go to Get method Route
    }
    function addData(Request $req)
    {
     $user = new Post(); 
     $user->name = $req->name; 
     $user->number = $req->number; 
     $user->save();  
     return redirect('/Read');
    }
    function index()
    {
        $data = Post::all();
        return view('list',['posts'=>$data]);
        
    }
}
