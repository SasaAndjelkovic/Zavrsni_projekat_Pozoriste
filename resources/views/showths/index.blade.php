@extends('layouts.app')

@section('content')
    @component('components.header')
        @slot('active', 'showths')
    @endcomponent

    <div class="d-flex justify-content-end">
        <a
        href="{{ route('showths.create') }}"
        class="btn btn-info mb-3"
        >Create +</a>
    </div>

    @if($showths->count() === 0)
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
                @foreach($showths as $showth)
                    @component('showths.components.table_row')
                        @slot('showth', $showth)
                    @endcomponent
                @endforeach
            </tbody>
        </table>
    @endif
@endsection