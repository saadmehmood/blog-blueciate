@extends('admin.layouts.app')

@section('content')

{{--    @include('admin/tags/_thumbnail')--}}

    {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' =>'PUT']) !!}
        @include('admin/tags/_form')

        <div class="pull-left">
            {{ link_to_route('admin.tags.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary']) }}
            {!! Form::submit(__('forms.actions.update'), ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    {!! Form::model($tag, ['method' => 'DELETE', 'route' => ['admin.tags.destroy', $tag], 'class' => 'form-inline pull-right', 'data-confirm' => __('tags.delete')]) !!}
        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> ' . __('tags.delete'), ['class' => 'btn btn-link text-danger', 'name' => 'submit', 'type' => 'submit']) !!}
    {!! Form::close() !!}
@endsection
