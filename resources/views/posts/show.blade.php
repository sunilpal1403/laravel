@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      
        <div class="col-8"><img src="/storage/{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:400px;"></div>
        <div class="col-4">
        	<div>
        		<div class="d-flex align-items-center">
        			<div class="pl-3">
        				<img src="/storage/{{$post->image}}" class="rounded-circle w-100" style="max-height:100px;max-width:100px;">
        			</div>
        		</div>
        		<div class="font-weight-bold">
        			<a href="/profile/{{$post->user->id}}">
        				<span>{{$post->user->username}}</span>
        			</a>
        		</div>
        	</div>
            <h1>{{$post->user->username}}</h1>
            <p>{{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection
