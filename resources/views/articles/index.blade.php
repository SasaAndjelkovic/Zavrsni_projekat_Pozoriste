@extends('layouts.app')

@section('content')
   
    @slot('active', 'articles')
    
    @if($articles->count() === 0)
        <p>No shows found!</p>
    @else

        <table class="table">
            <thead class="table-light">
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Author</th>
                <th>Avatars</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    @component('articles.components.table_row')
                        @slot('article', $article)
                    @endcomponent
                @endforeach
            </tbody>
        </table>
    @endif
@endsection