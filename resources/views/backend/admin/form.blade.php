@include('layouts.backend.errors')
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) !!}
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('email', 'Email:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
				{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email']) !!}
			</div>
		</div>
	</div>
</div>
@if (!isset($entity)) 
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('password', 'Password:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter password']) !!}
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('confirm_password', 'Password confirmation:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				{!! Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Enter password confirmation']) !!}
			</div>
		</div>
	</div>
</div>
@endif
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('phone', 'Phone:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
				{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter phone']) !!}
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('level', 'Role type:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-eye"></i></span>
				{!! Form::select('level', $params['levels'], null, ['class' => 'form-control', 'placeholder' => '--- Select role type ---']) !!}
			</div>
		</div>
	</div>
</div>
@include('layouts.backend.btn_form')