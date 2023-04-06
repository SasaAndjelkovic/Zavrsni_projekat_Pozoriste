@php
    /** @var \App\Models\Avatar $avatar */
@endphp

<div class="mb-3">
    <label for="name" class="form-label">Avatar name</label>
    <input type="text"
           name="name"
           value="{{ old('name', $avatar?->name) }}"
           class="form-control" id="name" placeholder="David">
    @error('name')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text"
           name="description"
           value="{{ old('description', $avatar?->description) }}"
           class="form-control" id="name" placeholder="mudar">
    @error('name')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>