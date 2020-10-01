@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-19/s150x150/120244592_356006635746641_5308040531661202560_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&_nc_ohc=pPEzLLULcqAAX-Tl6qG&oh=c6c96d083b848a4003c84e30fa56d650&oe=5F9CCE04" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>85</strong> posts</div>
                <div class="pr-5"><strong>171</strong> followers</div>
                <div class="pr-5"><strong>135</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="blackrose9.github.io">{{$user->profile->url ?? 'url not available'}}</a> </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"> <img src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-15/e15/10919380_347236018794493_412094876_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=101&amp;_nc_ohc=25v7juqzpMcAX-nP-eL&amp;_nc_tp=18&amp;oh=3e02b0baa7e5240fb3b22c58b8b3ec43&amp;oe=5F9E85D7" class="w-100"></div>
        <div class="col-4"> <img src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-15/e15/10831943_1375540699408753_2121813620_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=101&amp;_nc_ohc=7OIMzcKDFPcAX_E7V8k&amp;_nc_tp=18&amp;oh=42e21d9f12682b5653f39b29c21a7c5d&amp;oe=5F9BF472" class="w-100"></div>
        <div class="col-4"> <img src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-15/e15/10809976_531424123661356_341007288_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=104&amp;_nc_ohc=YxUL5z4kmPwAX-qb6Ax&amp;_nc_tp=18&amp;oh=c9109e0604ab1e2da68e510190bdfb5e&amp;oe=5F9FA8D1" class="w-100"></div>
    </div>
</div>
@endsection
