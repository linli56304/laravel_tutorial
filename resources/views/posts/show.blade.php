@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pe-3">
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle" style="height: 50px; width: 50px;">
                </div>
                <div>
                    <div class="fw-bold"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></div>
                </div>
                <div class="ps-3"><a href="#">Follow</a></div>
            </div>
            
            <hr>
                
            <p><span class="fw-bold"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span>  {{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection