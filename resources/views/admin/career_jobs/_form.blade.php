@php
    $posted_at = old('posted_at') ?? (isset($post) ? $post->posted_at->format('Y-m-d\TH:i') : null);
@endphp

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('title', __('jobs.attributes.title')) !!}
        {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'required']) !!}

        @error('title')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('Location', __('jobs.attributes.location')) !!}
        {!! Form::text('location', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'required']) !!}

        @error('title')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('posted_by', __('jobs.attributes.posted_by')) !!}
        {!! Form::select('posted_by', $users, null, ['class' => 'form-control' . ($errors->has('author_id') ? ' is-invalid' : ''), 'required']) !!}

        @error('author_id')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('posted_at', __('jobs.attributes.posted_at')) !!}
        <input type="datetime-local" name="posted_at" class="form-control {{ ($errors->has('posted_at') ? ' is-invalid' : '') }}" value="{{ $posted_at }}">

        @error('posted_at')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>


<div class="form-group">
    {!! Form::label('description', __('posts.attributes.description')) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control trumbowyg-form' . ($errors->has('content') ? ' is-invalid' : ''), 'required']) !!}

    @error('content')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
