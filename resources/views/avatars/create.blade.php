@extends('layouts.app')

@section('content')
    <a
        href="{{ route('avatars.index') }}"
        class="text-dark d-inline-block mb-4"
    >< Go back</a>

    <h1>Create a avatar</h1>

    <form action="{{ route('avatars.store') }}" method="POST">
        @csrf

        @component('avatars.components.form')
            @slot('avatar', null)
        @endcomponent

        <button
            type="submit"
            class="btn btn-dark"
        >Save</button>
    </form>
@endsection