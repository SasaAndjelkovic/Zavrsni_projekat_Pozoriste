@php
    /** @var \App\Models\Article $article */
@endphp

<tr>
    <td>
        {{ $article->getKey() }}
    </td>
    <td>
        {{ $article->name }}
    </td>
    <td>
        {{ $article->description }}
    </td>
    <td>
        {{ $article->author }}
    </td>
    <td>
        @foreach($article->avatars as $avatar)
            {{ $avatar->name }}
        @endforeach
    </td>
    <td class="d-flex justify-content-end">
        <a
            href="{{ route('shop', ['article' => $article]) }}"
            type="button"
            class="btn btn-danger me-4 d-inline-block"
        >Buy</a>

    </td>
</tr>