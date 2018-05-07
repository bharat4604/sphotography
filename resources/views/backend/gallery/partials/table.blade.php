<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($gallery->title) }}</td>
    <td>
        <span class="badge">{{ $gallery->is_published ? 'Yes' : 'No' }}</span>

    </td>
    <td class="text-right">
        <a href="{{route('gallery.edit', $gallery->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>
        <button type="button" data-url="{{route('gallery.destroy', $gallery->slug)}}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>