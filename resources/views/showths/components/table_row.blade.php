@php
    /** @var \App\Models\Showth $showth */
@endphp

<tr>
    <td>
        {{ $showth->getKey() }}
    </td>
    <td>
        {{ $showth->name }}
    </td>
    <td>
        {{ $showth->description }}
    </td>
    <td>
        {{ $showth->author }}
    </td>
    <td class="d-flex justify-content-end">
        <a
            href="{{ route('showths.edit', ['showth' => $showth]) }}"
            type="button"
            class="btn btn-dark me-4 d-inline-block"
        >Edit</a>

        <form method="POST" action="{{ route('showths.delete', ['showth' => $showth]) }}">
            @csrf
            @method('DELETE')
            <button
                type="submit"
                class="btn btn-danger"
            >Delete</button>
        </form>
    </td>
</tr>