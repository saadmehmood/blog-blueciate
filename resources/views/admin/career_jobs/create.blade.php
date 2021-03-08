@extends('admin.layouts.app')

@section('content')
    <h1>@lang('jobs.create')</h1>

    {!! Form::open(['route' => ['admin.jobs.store'], 'method' =>'POST']) !!}
        @include('admin/career_jobs/_form')

        {{ link_to_route('admin.jobs.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary']) }}
        {!! Form::submit(__('forms.actions.save'), ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
