@php
    /** @var \App\Models\Showth $showth */
    /** @var \App\Models\Avatar $avatar */
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
    <label for="description" class="form-label">Description</label>
    <input type="text" autocomplete="username"
           name="description"
           value="{{ old('description', $showth?->description) }}"
           class="form-control" id="description" placeholder="Detektivska prica">
    @error('description')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="author" autocomplete="username"
           name="author"
           value="{{ old('author', $showth?->author) }}"
           class="form-control" id="author" placeholder="jane@doe.com">
    @error('author')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="avatar" class="form-label">Avatars</label>
    @foreach($avatars as $avatar)
        <div class="form-check">
            <input class="form-check-input" type="checkbox"
                    name="avatar_ids[]"
                   @if(in_array($avatar->id, $selectedAvatarIds)) checked @endif
                   value="{{ $avatar->id }}" id="avatar-{{ $avatar->id }}">
            <label class="form-check-label" for="avatar-{{ $avatar->id }}">
                {{ $avatar->name }}
            </label>
        </div>
    @endforeach
</div>