@if ($tag->hasThumbnail())
    {{ Html::image($tag->thumbnail->getUrl('thumb'), $tag->thumbnail->name, ['class' => 'img-thumbnail', 'width' => '350']) }}

    {!! Form::model($tag, ['method' => 'DELETE', 'route' => ['admin.posts_thumbnail.destroy', $tag], 'data-confirm' => __('forms.posts.delete_thumbnail')]) !!}
        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> ' . __('posts.delete_thumbnail'), ['class' => 'btn btn-link text-danger', 'name' => 'submit', 'type' => 'submit']) !!}
    {!! Form::close() !!}
@endif
