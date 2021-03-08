@extends('admin.layouts.app')

@section('content')
{{--    <p>@lang('jobs.show') : {{ link_to_route('careers.show', route('careers.show', $post), $post) }}</p>--}}


    {!! Form::model($post, ['route' => ['admin.jobs.update', $post], 'method' =>'PUT']) !!}
        @include('admin/career_jobs/_form')

        <div class="pull-left">
            {{ link_to_route('admin.jobs.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary']) }}
            {!! Form::submit(__('forms.actions.update'), ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    {!! Form::model($post, ['method' => 'DELETE', 'route' => ['admin.jobs.destroy', $post], 'class' => 'form-inline pull-right', 'data-confirm' => __('forms.posts.delete')]) !!}
        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> ' . __('posts.delete'), ['class' => 'btn btn-link text-danger', 'name' => 'submit', 'type' => 'submit']) !!}
    {!! Form::close() !!}
@endsection
