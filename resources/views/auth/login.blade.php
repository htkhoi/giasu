@extends('auth.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>{{ trans('login-logout.err-mess') }}</strong>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
					{!! Form::open(array('url' => 'auth/login', 'method' => 'post', 'class' => 'form-horizontal')) !!}
						{!! csrf_field() !!}

						<div class="form-group">
							{!! Form::label('email', 'E-Mail Address', array('class' => 'col-md-4 control-label')) !!}
							<div class="col-md-6">
								{!! Form::email('email', '', array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password', 'Password', array('class' => 'col-md-4 control-label')) !!}
							<div class="col-md-6">
								{!! Form::password('password', array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										{!! Form::checkbox('remember') !!} Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
