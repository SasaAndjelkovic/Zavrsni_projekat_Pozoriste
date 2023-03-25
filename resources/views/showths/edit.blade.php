@extends('layouts.app')

@section('content')
    <a
        href="{{ route('showths.index') }}"
        class="text-dark d-inline-block mb-4"
    >< Go back</a>

    <h1>Edit show</h1>

    <form action="{{ route('showths.update', ['showth' => $showth]) }}" method="POST">
        @csrf
        @method('PUT')

        @component('showths.components.form')
            @slot('showth', $showth)
            @slot('avatars', $avatars)
            @slot('selectedAvatarIds', $selectedAvatarIds)
        @endcomponent

        <button
            type="submit"
            class="btn btn-dark"
        >Update</button>
    </form>
@endsection