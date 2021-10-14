@extends('layouts.app')

@section('content')
        <h1 clast="text-5xl">Blog</h1>

            <div class="font-sans">
                <span class="text-base md:texte-sm text-teal-500 font-bold >&lt;</span>
                <a href="{{ route('home') }} class="text-basse md:texte-sm text-teal-500 font-bold no-underLine hover:underLine" >Back to Blog</a>
               @foreach ($posts as $post)
                    <a href="{{  route('frontend.posts.show', $post->id }}"></a>
                    {{ $post->title }}
                    </a>
                    <a  class="text-basse font-sans text-grey-900 font-bold font-sans pt-6 pb-2 text-3xl md:text-4xl" >{{ $post->title }}</a>
                    <p class="text-sm md:text-base font-normal text-gray-600">published  19 February 2019</p><br>
                @endforeach


@endsection

