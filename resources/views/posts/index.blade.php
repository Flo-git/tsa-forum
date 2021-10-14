@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Liste des articles</div>

                    <div class="card-body">
                        <a class="btn tn-primary"   href="{{ route('posts.create') }}">Ajouter un article</a>
                        <table class="table-bordered" width="100%">
                            <thead>
                            <tr>
                                <td width=5%>ID</td>
                                <td width=30%>Titre</td>
                                <td width=15%>Créé le</td>
                                <td width=15%>Modifié le</td>
                                <td width=35% align="center">Actions</td>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td  width=5%>
                                        {{ $post->id }}
                                    </td>
                                    <td  width=45%>
                                        {{ $post->title }}
                                    </td>
                                    <td  width=15%>
                                        {{ $post->created_at->diffforHumans() }}
                                    </td>
                                    <td  width=15%>
                                        {{ $post->updated_at->diffforHumans() }}
                                    </td>
                                    <td  width=10% align="right">
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td width=10% align="left">
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Supprimer</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

