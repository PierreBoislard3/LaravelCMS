@extends('layouts.backend')

@section('title', $page->exists ? 'Editing '.$page->title : 'Create New Page')

@section('content')
    {!! Form::model($page, [
        'method' => $page->exists ? 'put' : 'post',
        'route' => $page->exists ? ['backend.pages.update', $page->id] : ['backend.pages.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('uri', 'URI') !!}
        {!! Form::text('uri', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        <p class="help-block">
            This name is used to generate links to the page.
        </p>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            {!! Form::label('template') !!}
        </div>
        <div class="col-md-4">
            {!! Form::select('template', $templates, null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            {!! Form::label('order') !!}
        </div>
        <div class="col-md-2">
            {!! Form::select('order', [
                '' => '',
                'before' => 'Before',
                'after' => 'After',
                'childOf' => 'Child Of'
            ], null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-5">
            {!! Form::select('orderPage', [
                '' => ''
            ] + $orderPages->lists('padded_title', 'id')->toArray(), null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('content') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="checkbox">
        <label>
            {!! Form::checkbox('hidden') !!}

            Hide page from navigation

            <span class="help-block">
                Checking this will hide the page from the navigation. Can only be applied to pages without children.
            </span>
        </label>
    </div>

    <div class="form-group">
        {!! Form::label('featured_image') !!}
        <div class="fileinput fileinput-new" data-provides="fileinput" style="display:block;">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
            <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">Select Featured Image</span><span class="fileinput-exists">Change</span>{!! Form::file('featured_image', ['class' => 'form-control']) !!}</span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    </div>

    {!! Form::submit($page->exists ? 'Save Page' : 'Create New Page', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    <script>
        CKEDITOR.replace( 'content');
    </script>
@endsection
