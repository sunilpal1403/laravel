@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->profileImage()}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{$user->username}}</h2>
                  <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                <a href="/p/create">add new post</a>
                
            </div>
            <div>
                
            
                <a href="/profile/{{$user->id}}/edit">edit Profile</a>
               
            </div>
            <div class="row">
                <div class="col-4"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="col-4"><strong>22.9</strong> followers</div>
                <div class="col-4"><strong>269</strong> following</div>
            </div>
            <div class="pt-5 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}.</div>
            <div><a href="">{{$user->profile->url?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pl-4">
        @foreach($user->posts as $post)
        <div class="col-4">
            <a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" style="height:172px"></a></div>
       
        @endforeach
    </div>
</div>
@endsection
