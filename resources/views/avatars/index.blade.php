@extends('layouts.app')

@section('content')
    @component('components.header')
        @slot('active', 'avatars')
    @endcomponent

    <div class="d-flex justify-content-end">
        <a
        href="{{ route('avatars.create') }}"
        class="btn btn-info mb-3"
        >Create +</a>
    </div>

    @if($avatars->count() === 0)
        <p>No avatars found!</p>
    @else
        <table class="table">
            <thead class="table-light">
                <th>ID#</th>
                <th>Name</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($avatars as $avatar)
                    @component('avatars.components.table_row')
                        @slot('avatar', $avatar)
                    @endcomponent
                @endforeach
            </tbody>
        </table>
    @endif
@endsection