@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Liste des articles</div>
                    <form action="{{ route('posts.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <input class="form-control"  type="text" name="title" placeholder="titre">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input  class="form-control"  type="text" name="slug" placeholder="slug">
                        @error('slug')

                        <input class="form-control"  type="text" name="intro" placeholder="intro">
                        <input  class="form-control"  type="text" name="content" placeholder="contenu">

                        <button type="submit">Ajouter l'article</button>
                    </form>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

