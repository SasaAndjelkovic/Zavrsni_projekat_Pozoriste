@extends('layouts.app')

@section('content')
    <a
        href="{{ route('articles.index') }}"
        class="text-dark d-inline-block mb-4"
    >< Go back</a>

    <h1>Coming soon</h1>

    <table class="table">
        <thead class="table-light">
            <th>Name</th>
            <th>Author</th>
        </thead>
        <tbody>
            @foreach($trailers['results'] as $trailer)
            <tr>
            <td>{{$trailer['title']}}</td>
                @foreach($trailer['authors'] as $author)
                <td>{{$author['name']}}</td>
                @endforeach
            </tr>
                
        
            @endforeach
        </tbody>
       
    </table>
@endsection



              
