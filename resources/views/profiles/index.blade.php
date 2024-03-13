@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row px-5">
        <div class="col-3 p-5">
            <img src="https://g20.bimmerpost.com/forums/attachment.php?attachmentid=2737193&stc=1&d=1636249291" style="height: 250px; width: 250px;" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add a new post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-5"><strong>6.1k</strong> followers</div>
                <div><strong>6</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'url.com'}}</a></div>

        </div>
    </div>

    <div class="row px-5 pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100 h-100 object-fit-contain border rounded">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection