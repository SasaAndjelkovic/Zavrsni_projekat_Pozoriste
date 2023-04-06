@php
    /** @var \App\Models\Avatar $avatar */
@endphp

<tr>
    <td>
        {{ $avatar->getKey() }}
    </td>
    <td>
        {{ $avatar->name }}
    </td>
    <td>
        {{ $avatar->description }}
    </td>
    <td class="d-flex justify-content-end">
        <a
            href="{{ route('avatars.edit', ['avatar' => $avatar]) }}"
            type="button"
            class="btn btn-dark me-4 d-inline-block"
        >Edit</a>

        <form method="POST" action="{{ route('avatars.destroy', ['avatar' => $avatar]) }}">
            @csrf
            @method('DELETE')
            <button
                type="submit"
                class="btn btn-danger"
            >Delete</button>
        </form>
    </td>
</tr>