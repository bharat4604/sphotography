<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($work->title) }}</td>
    <td>
        <span class="badge">{{ $work->is_published ? 'Yes' : 'No' }}</span>

    </td>
    <td class="text-right">
        <a href="{{route('work.edit', $work->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>
        <button type="button" data-url="{{route('work.destroy', $work->slug)}}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>