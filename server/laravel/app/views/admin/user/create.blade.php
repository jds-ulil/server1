@extends('layouts.default_admin')

@section('addcss')
@stop

@section('content')
    <div class="row">
        <div class="col-md-2 bootstrap-admin-col-left">
            <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                <li>
                    <a href="{{ URL::to('admin/users/') }}"><i class="glyphicon glyphicon-chevron-right"></i>index</a>
                </li>
                <li class="active">
                    <a href="{{ URL::to('admin/users/create') }}"><i class="glyphicon glyphicon-chevron-right"></i>create</a>
                </li>
            </ul>
        </div>

        <div class="col-md-8">
            <div class="row">
                {{ HTML::ul($errors->all()) }}
                <div class="panel panel-default bootstrap-admin-no-table-panel">
                    <div class="panel-heading">
                        <div class="text-muted bootstrap-admin-box-title">Form Example</div>
                    </div>

                    <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                        {{ Form::open(array('url' => 'admin/users', 'class' => 'form-horizontal')) }}

                        <div class="form-group">
                            {{ Form::label('inputName', 'Nama', array(
                                'class' => 'col-lg-2 control-label',
                                )) }}
                            <div class="col-lg-10">
                            {{ Form::text('name', Input::old('name'), array(
                                'class' => 'form-control',
                                'id' => 'inputName',
                                )) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('inputEmail', 'Email', array(
                                'class' => 'col-lg-2 control-label',
                                )) }}
                            <div class="col-lg-10">
                                {{ Form::text('name', Input::old('name'), array(
                                    'class' => 'form-control',
                                    'id' => 'inputName',
                                    )) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('inputPassword', 'Password', array(
                                'class' => 'col-lg-2 control-label',
                                )) }}
                            <div class="col-lg-10">
                                {{ Form::password('password', array(
                                    'class' => 'form-control',
                                    'id' => 'inputPassword',
                                    )) }}
                            </div>
                        </div>


                        {{ Form::submit('Create!', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('addjs')

@stop
