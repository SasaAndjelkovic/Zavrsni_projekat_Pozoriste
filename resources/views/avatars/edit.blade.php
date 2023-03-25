@extends('layouts.app')

@section('content')
    <a
        href="{{ route('avatars.index') }}"
        class="text-dark d-inline-block mb-4"
    >< Go back</a>

    <h1>Edit a avatar</h1>

    <form action="{{ route('avatars.update', ['avatar' => $avatar]) }}" method="POST">
        @csrf
        @method('PUT')

        @component('avatars.components.form')
            @slot('avatar', $avatar)
        @endcomponent

        <button
            type="submit"
            class="btn btn-dark"
        >Update</button>
    </form>
@endsection