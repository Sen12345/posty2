@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12">
        <div class="p-6">
            <h1 class="text-2x1 mb-1 font-medium">{{ $user->name }}</h1>
            <p>Posted: {{$posts->count() }} {{Str::plural('Post', $posts->count()) }} and received {{ $user->receivedLikes()->count() }} likes</p>
        </div>

        <div class=" bg-white p-6 bg-rounded-lg">
            @if($posts->count())
            @foreach($posts as $post)
            <x-post :post="$post" />
            @endforeach
            {{ $posts->links() }}
            @else
            <div>{{ $user->name }} user does not have any post</div>
            @endif
        </div>
    </div>

</div>
@endsection
