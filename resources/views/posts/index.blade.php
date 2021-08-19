@extends('layouts.app')

@section('content')
<div class="container">
    @if (count($posts) > 0)
        @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="{{ URL::asset( 'storage/' . $post->image ) }}" class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div>
                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span> {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <div class="col-6">
                <img src="/jpg/empty-newsfeed.png" alt="It's quiet in here. Follow some friends!" class="d-flex justify-content-center">
        </div>
    @endif

        <div class="row">
            <div class="col-12">
                {{ $posts->links() }}
            </div>
        </div>
</div>
@endsection