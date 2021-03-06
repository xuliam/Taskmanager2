@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['route' => ['tasks.store', 'ss'=>$id->id], 'method' => 'post']) !!}
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-plus"></i></div>
                    </div>
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Any task for today?']) !!}
                </div>
        {!! $errors->create->first('name', '<div class="alert alert-danger">:message</div>') !!}
        {!! $errors->create->first('ss','<div class="alert alert-danger">:message</div>') !!}
        {!! Form::close() !!}

        @include('tasks._list')
    </div>
@endsection
