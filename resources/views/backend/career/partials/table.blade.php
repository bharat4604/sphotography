<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($career->title, 47) }}</td>
    <td class="text-center">
        <span class="badge">{{ $career->is_published ? 'Yes' : 'No' }}</span>
    </td>


    <td class="text-right">
        <a href="{{route('career.edit', $career->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>
        <button type="button" data-url="{{ route('career.destroy', $career->slug) }}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>