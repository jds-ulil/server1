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
                {{ HTML::ul($errors->all())
                }}
                <div class="panel panel-default bootstrap-admin-no-table-panel">
                    <div class="panel-heading">
                        <div class="text-muted bootstrap-admin-box-title">Form Example</div>
                    </div>

                    <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                        {{ Form::open(array('url' => 'admin/users', 'class' => 'form-horizontal')) }}

                        <div class="form-group @if($errors->has('name')) has-error @endif ">
                            {{ Form::label('inputName', 'Nama', array(
                                'class' => 'col-lg-2 control-label',
                                )) }}
                            <div class="col-lg-10">
                            {{ Form::text('name', Input::old('name'), array(
                                'class' => 'form-control',
                                'id' => 'inputName',
                                )) }}
                            <span class="help-block">{{$errors->first('name')}}</span>
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('email')) has-error @endif ">
                            {{ Form::label('inputEmail', 'Email', array(
                                'class' => 'col-lg-2 control-label',
                                )) }}
                            <div class="col-lg-10">
                                {{ Form::text('email', Input::old('email'), array(
                                    'class' => 'form-control ajaxCheck',
                                    'id' => 'inputName',
                                    )) }}
                                <span class="help-block">{{$errors->first('email')}}</span>
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('password')) has-error @endif ">
                            {{ Form::label('inputPassword', 'Password', array(
                                'class' => 'col-lg-2 control-label',
                                )) }}
                            <div class="col-lg-10">
                                {{ Form::password('password', array(
                                    'class' => 'form-control',
                                    'id' => 'inputPassword',
                                    )) }}
                                <span class="help-block">{{$errors->first('password')}}</span>
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

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.ajaxCheck').focusout(function(){
                var self = $(this);
                $.ajax({
                    type:'POST',
                    url: 'errorCheck/',
                    data :{
                        key : $(this).attr("name"),
                        val : $(this).val()
                    },
                    success: function(data){
                        self.parent().find(".help-block").text("");
                        self.parent('div').parent('div').removeClass('has-error');
                    },
                    error: function(data){
                        self.parent().find(".help-block").text(JSON.parse(data.responseText)[0]);
                        self.parent('div').parent('div').addClass('has-error');
                        // Render the errors with js ...
                    }
                });
            });
        })
    </script>
@stop
