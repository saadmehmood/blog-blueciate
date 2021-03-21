@extends('admin.layouts.app')

@section('content')


    <div class="form-row">
        <div class="form-group col-md-6">
            <label>{{ __('jobs.attributes.title') }}</label>
            <p class="form-control">{{ $job->title }}</p>
        </div>
        <div class="form-group col-md-6">
            <label>{{ __('jobs.attributes.location') }}</label>
            <p class="form-control">{{ $job->location }}</p>
        </div>
        <div class="form-group col-md-6">
            <label>{{ __('jobs.attributes.status') }}</label>
            <p class="form-control">{{ $job->status ? 'Active' : 'Inactive' }}</p>
        </div>
        <div class="form-group col-md-12">
            <label>{{ __('posts.attributes.description') }}</label>
            <div style="background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;padding: 0.375rem 0.75rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">{!! $job->description !!}</div>
        </div>
    </div>

    <div class="pull-left">
        {{ link_to_route('admin.jobs.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary']) }}
        {{ link_to_route('admin.jobs.edit', __('forms.actions.edit'), $job, ['class' => 'btn btn-primary']) }}
    </div>

    {!! Form::model($job, ['method' => 'DELETE', 'route' => ['admin.jobs.destroy', $job], 'class' => 'form-inline pull-right', 'data-confirm' => __('forms.posts.delete')]) !!}
        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> ' . __('posts.delete'), ['class' => 'btn btn-link text-danger', 'name' => 'submit', 'type' => 'submit']) !!}
    {!! Form::close() !!}
@endsection
