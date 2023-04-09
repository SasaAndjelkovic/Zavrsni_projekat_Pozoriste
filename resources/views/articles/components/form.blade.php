@php
    /** @var \App\Models\Showth $showth */
@endphp

<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" autocomplete="username"
           name="name"
           value="{{ old('name', $showth?->name) }}"
           class="form-control" id="name" placeholder="Gospodja Ministarka">
    @error('name')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
</div>