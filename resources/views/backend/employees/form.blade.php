@include('layouts.backend.errors')

<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope-open-o"></i></span>
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('birth_day', 'Birth day:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        {!! Form::text('birth_day', null, ['class' => 'form-control datepicker']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('phone', 'Phone:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 text-center padding-top">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                <img src="{{ isset($entity) ? $entity->getUrlAvatar() : getAvatarDefault() }}" alt="Avatar">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            {!! Form::label('address', 'Address:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            {!! Form::label('id_number', 'ID number:') !!} <span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {!! Form::text('id_number', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            {!! Form::label('bank_account', 'Bank account:') !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-university"></i></span>
                {!! Form::text('bank_account', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
        </div>
    </div>
</div>
@include('layouts.backend.btn_form')