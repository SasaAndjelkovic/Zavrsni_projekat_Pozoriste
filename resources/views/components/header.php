<div class="d-flex mb-4">
    <a class="fs-1 text-decoration-none me-5 @if($active === 'showths') text-dark @else text-secondary @endif"
        href="{{ route('showths.index') }}">
        🚀 Shows
    </a>
    <a class="fs-1 text-decoration-none me-5 @if($active === 'avatars') text-dark @else text-secondary @endif"
       href="{{ route('avatars.index') }}">
        📦 Avatars
    </a>
</div>