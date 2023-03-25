@php
    /** @var \App\Models\Avatar $avatar */
@endphp

<div class="mb-3">
    <label for="name" class="form-label">Avatar name</label>
    <input type="text"
           name="name"
           value="{{ old('name', $avatar?->name) }}"
           class="form-control" id="name" placeholder="Bananas">
    @error('name')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>