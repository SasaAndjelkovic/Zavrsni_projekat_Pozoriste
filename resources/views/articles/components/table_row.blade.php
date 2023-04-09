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
        <select>
            @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">
                    {{ $i }} 
                </option>
            @endfor
        </select>
    </td>
    <td class="d-flex justify-content-end">
        <a
            href="{{ route('articles.userreport', ['article' => $article]) }}"
            type="button"
            class="btn btn-danger me-4 d-inline-block"
        >Buy</a>

    </td>
</tr>