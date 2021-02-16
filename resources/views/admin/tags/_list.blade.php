<table class="table table-striped table-sm table-responsive-md">
    <caption>{{ trans_choice('posts.count', $tags->total()) }}</caption>
    <thead>
        <tr>
            <th>@lang('posts.attributes.title')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{ link_to_route('admin.tags.edit', $tag->name, $tag) }}</td>
                <td>
                    <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    {!! Form::model($tag, ['method' => 'DELETE', 'route' => ['admin.tags.destroy', $tag], 'class' => 'form-inline', 'data-confirm' => __('forms.posts.delete')]) !!}
                        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-sm', 'name' => 'submit', 'type' => 'submit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $tags->links() }}
</div>
