@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-19/s150x150/120244592_356006635746641_5308040531661202560_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&_nc_ohc=pPEzLLULcqAAX-Tl6qG&oh=c6c96d083b848a4003c84e30fa56d650&oe=5F9CCE04" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>171</strong> followers</div>
                <div class="pr-5"><strong>135</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="http://blackrose9.github.io">{{$user->profile->url ?? 'url not available'}}</a> </div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100" alt=""></a>
            </div>
        @endforeach
    </div>
</div>
@endsection
