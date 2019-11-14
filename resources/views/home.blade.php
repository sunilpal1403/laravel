@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="../images/icon.png" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{$user->username}}</h2>
                <a href="{{ route('/p/create') }}">add new post</a>
            </div>
            <div class="row">
                <div class="col-4"><strong>229</strong> posts</div>
                <div class="col-4"><strong>22.9</strong> followers</div>
                <div class="col-4"><strong>269</strong> following</div>
            </div>
            <div class="pt-5 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}.</div>
            <div><a href="">{{$user->profile->url?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pl-4">
        <div class="col-4"><img src="../images/download.jpg" style="height:172px"></div>
        <div class="col-4"><img src="../images/img.jpg" style="height:172px"></div>
        <div class="col-4"><img src="../images/search.jpg" style="height:172px"></div>
    </div>
</div>
@endsection
