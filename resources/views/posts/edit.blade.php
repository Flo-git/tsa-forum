@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Modifier un article</div>
                    <form action="{{ route('posts.update', $post->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <input value="{{ $post->title }}" class="form-control"  type="text" name="title" placeholder="titre">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input value="{{ $post->slug }}" class="form-control"  type="text" name="slug" placeholder="slug">
                        @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input value="{{ $post->intro }}" class="form-control"  type="text" name="intro" placeholder="intro">
                        <input value="{{ $post->content }}" class="form-control"  type="text" name="content" placeholder="contenu">

                        <button type="submit">Modifier l'article</button>
                    </form>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

