@extends('layouts.app')

@section('content')
{{--
    <div class="content">
        <div class="title m-b-md">
            {{ $post->title }}
            <div class="m-b-md">
                {{ $post->content }}
            </div>
        </div>
    </div>
--}}
    <!-- Post Section -->

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{ $post->title }}
                </a>
                <p href="#" class="text-sm pb-8">
                    By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->user->name }}</a>, Published on {{ $post->created_at->diffforHumans() }}
                </p>
                <h1 class="text-2xl font-bold pb-3">Introduction</h1>
                <p class="pb-3"> {{ $post->intro }}</p>
                <h1 class="text-2xl font-bold pb-3">Article</h1>
                <p class="pb-3">{{ $post->content }}</p>
            <!--Tags -->
            <div class="text-base md:text-sm text-gray-500 px-4 py-6">
                Tags:
                @foreach($post->tags as $tag)
                    <a href="{{ route('front.tags.show', ['slug' => $tag->slug]) }}">
                        {{ $tag->title }}
                    </a>
            @endforeach
            <!-- <a href="#" class="text-base md:text-sm text-teal-500 no-underline hover:underline">Link</a> -->
            </div>

                 -->
                Tags:
                @foreach($post->tags as $tag)
                    <div class="ml-4 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-green-200 text-green-700 rounded-full">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-arrow-right mr-2"
                        >
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                    <a href="{{ route('front.tags.show', ['slug' => $tag->slug]) }}">
                        {{ $tag->title }}
                    </a>
                @endforeach
                    </div>

            </div>
        </article>


<!--=================composant commentaires =============================-->
<comments-component post_id="{{ $post->id }}"></comments-component>
<!--=================fin composant commentaires =============================-->
<hr>
<!-- <p> - Liste des commentaires- blade -</p>
      @foreach($post->comments as $comment)
            <span>
                <p>{{ $comment->content }}</p>
                   <small>{ { $comment->user->name }}</small>
            </span>
                @foreach($comment->comments as $subComment)
                    <div class="pl-8">
                        <p>{{ $subComment->content }}</p>
                           <small>{{ $subComment->user->name }}</small>
                    </div>
                @endforeach
        @endforeach
 -->
<div class="w-full flex pt-6">
    @if ($previous)
        <a href="{{ route('front.posts.show', $previous->slug) }}" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
            <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Précédent</p>
            <p class="pt-2">{{ $previous->title }}</p>
        </a>
    @else
        <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
            <p class="text-lg text-blue-800 font-bold flex items-center justify-end"><i class="fas fa-arrow-right pl-1"></i></p>
            <p class="pt-2"></p>
        </a>
    @endif

    @if ($next)
        <a href="{{ route('front.posts.show', $next->slug) }}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
            <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Suivant <i class="fas fa-arrow-right pl-1"></i></p>
            <p class="pt-2">{{ $next->title }}</p>
        </a>
    @else
        <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
            <p class="text-lg text-blue-800 font-bold flex items-center justify-end"><i class="fas fa-arrow-right pl-1"></i></p>
            <p class="pt-2"></p>
        </a>
    @endif
</div>


            <!--Subscribe-->
            <!--
            <hr class="border-b-2 border-gray-400 mb-8 mx-4">
            <div class="container px-4">
                <div class="font-sans bg-white rounded-lg shadow-md p-4 text-center">
                    <h2 class="font-bold break-normal text-xl md:text-3xl">Subscribe to my Newsletter</h2>
                    <h3 class="font-bold break-normal font-normal text-gray-600 text-sm md:text-base">Get the latest posts delivered right to your inbox</h3>
                    <div class="w-full text-center pt-4">
                        <form action="#">
                            <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                                <input type="email" placeholder="youremail@example.com" class="flex-1 mt-4 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none">
                                <button type="submit" class="flex-1 mt-4 block md:inline-block appearance-none bg-teal-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-teal-400">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            -->
@endsection

