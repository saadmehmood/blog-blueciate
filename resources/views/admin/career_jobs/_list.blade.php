<table class="table table-striped table-sm table-responsive-md">
    <caption>{{ trans_choice('posts.count', $posts->total()) }}</caption>
    <thead>
        <tr>
            <th>@lang('posts.attributes.title')</th>
            <th>@lang('posts.attributes.location')</th>
            <th>@lang('posts.attributes.posted_at')</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $careerJobs)
            <tr>
                <td>{{ link_to_route('admin.jobs.edit', $careerJobs->title, $careerJobs) }}</td>
                <td>{{  $careerJobs->location }}</td>
                <td>{{ humanize_date($careerJobs->posted_at, 'd/m/Y H:i:s') }}</td>
                <td><span class="badge badge-pill badge-secondary">{{ $careerJobs->status }}</span></td>
                <td>
                    <a href="{{ route('admin.jobs.edit', $careerJobs) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    {!! Form::model($careerJobs, ['method' => 'DELETE', 'route' => ['admin.jobs.destroy', $careerJobs], 'class' => 'form-inline', 'data-confirm' => __('forms.posts.delete')]) !!}
                        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-sm', 'name' => 'submit', 'type' => 'submit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
