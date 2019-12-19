@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['route' => 'tasks.store', 'method' => 'post']) !!}
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-plus"></i></div>
                    </div>
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Any task for today?']) !!}

                    {!! Form::hidden('ss', $cat->id) !!}
                </div>
        {!! Form::close() !!}

    </div>
@endsection
