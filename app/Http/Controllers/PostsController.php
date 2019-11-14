<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;
class PostsController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

   public function create(){
   	return  view('posts.create');
   }

   public function store(Request $request){
   	$data=request()->validate([
   		'caption'=>'required',
   		'image'=>['required','image']
   		]);
   $filepath =request('image')->store('upload','public');
         $image =Image::make(public_path("storage/{$filepath}"))->fit(1200,1200);
         $image->save();
   	auth()->user()->posts()->create([
   		"caption"=>$data["caption"],
   		"image" =>$filepath
   		]);

 return redirect('/profile/'. auth()->user()->id);
   //	dd($request->all());
   }

   public function show($post){
      $post=Post::findOrFail($post);
      
      return view('posts.show',compact('post'));
   }
}
