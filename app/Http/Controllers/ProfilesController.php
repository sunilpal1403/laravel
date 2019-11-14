<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
     public function index($user)
    {
        $follows =(auth()->user())?auth()->user()->following->contains($user):false;
    	$user=User::findOrFail($user);
        return view('profile/index',[
        	"user"=>$user,
            "follows"=>$follows
        	]);
    }

    public function edit(User $user){
    	//$user =User::findOrFail($user);
    	return view('profile/edit',compact('user'));

    }

    public function update(User $user){
    	$data = Request()->validate([
    		'title'=>'required',
    		'description'=>'required',
    		'url'=>'url',
    		'image'=>''
    		]);
         if(request('image')){
            $filepath =request('image')->store('images','public');
            $image =Image::make(public_path("storage/{$filepath}"))->fit(1200,1200);
            $image->save();
           $imagearray= ['image'=>$filepath];
         }
    	$user->profile->update(array_merge($data,$imagearray));
    	return redirect('profile/'.$user->id);
    }
}
