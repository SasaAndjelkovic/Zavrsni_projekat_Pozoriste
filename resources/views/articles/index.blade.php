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
                <th>Quantity</th>
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
            <div class="d-flex justify-content-end">
            <a
            href="{{ route('articles.soon') }}"
            class="btn btn-info mb-3"
            >Coming soon</a>
        </div>
    @endif
@endsection