@extends('layouts.default')

@section('content')
	<div class="container">
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info" >
				<div class="panel-heading">
					<div class="panel-title">Log In</div>
				</div>

				<div style="padding-top:30px" class="panel-body" >
					@if (count($errors->all()) > 0)
						<div id="login-alert" class="alert alert-danger col-sm-12">
						@foreach($errors->all() as $message)
							<li>{{$message}}</li>
						@endforeach
						</div>
					@endif
					{{ Form::open(array('url' => 'login', 'id'=>'loginform', 'class'=>'form-horizontal', 'role'=>'form')) }}
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class' => 'form-control')) }}
						</div>

						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							{{ Form::password('password', array('class' => 'form-control')) }}
						</div>

						{{--<div class="input-group">
							<div class="checkbox">
								<label>
									<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
								</label>
							</div>
						</div>--}}

						<div style="margin-top:10px" class="form-group">
							<!-- Button -->
							<div class="col-sm-12 controls">
								{{ Form::submit('Submit!', array('class'=>'btn btn-success')) }}
								{{--<a id="btn-login" href="#" class="btn btn-success">Login </a>--}}
							</div>
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@stop