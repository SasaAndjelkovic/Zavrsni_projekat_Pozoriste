@extends('layouts.app')

@section('content')
    <a
        href="{{ route('showths.index') }}"
        class="text-dark d-inline-block mb-4"
    >< Go back</a>

    <h1>Create show</h1>

    <form action="{{ route('showths.store') }}" method="POST">
        @csrf

        @component('showths.components.form')
            @slot('showth', null)
            @slot('avatars', $avatars)
            @slot('selectedAvatarIds', [])
        @endcomponent

        <button
            type="submit"
            class="btn btn-dark"
        >Save</button>
    </form>
@endsection