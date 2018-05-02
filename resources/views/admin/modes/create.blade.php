@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.mode.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.modes.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tournamentmode', trans('quickadmin.mode.fields.tournamentmode').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('tournamentmode', old('tournamentmode'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tournamentmode'))
                        <p class="help-block">
                            {{ $errors->first('tournamentmode') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

