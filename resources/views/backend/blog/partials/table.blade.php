<tr>
    <td>{{++$key}}</td>
    {{--<td>{{ str_limit($blog->maintitle, 47) }}</td>--}}
    <td>{{ str_limit($blog->title, 47) }}</td>
    <td class="text-center">
        <span class="badge">{{ $blog->is_published ? 'Yes' : 'No' }}</span>
    </td>
    <td class="text-right">
        <a href="{{route('blog.edit', $blog->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>
        <button type="button" data-url="{{ route('blog.destroy', $blog->slug) }}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>