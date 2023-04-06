@extends('layouts.app')

<!-- meni ne treba takav -->

@php
    /** @var \App\Models\Showth $$showth */
    /** @var \App\Models\Showth $topPerformer */
    /** @var \App\Models\Product $worstPerformer */
@endphp

@section('content')
    @component('components.header')
        @slot('active', 'reports')
    @endcomponent

    <div class="row mb-4">
        <div class="col">
            <div class="border rounded p-5">
                <h2 class="mb-3">✨ Top performer</h2>
                <p>
                    {{ $topPerformer->name }}
                </p>
            </div>
        </div>

        <div class="col">
            <div class="border rounded p-5">
                <h2 class="mb-3">👎 Worst performer</h2>
                <p>
                    {{ $worstPerformer->name }}
                </p>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="table-light">
        <th>Product</th>
        <th>Clients count</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->clients_count }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection