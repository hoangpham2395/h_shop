@extends('layouts.backend.main')
@section('content')
	<section class="content-header">
        <h1>
            Admin
            <small>Add new admin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.index')}}"><i class="fa fa-user"></i> Admin</a></li>
            <li class="active">Add new admin</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-info">
                	<div class="box-header">
                		<h3 class="box-title">Edit admin</h3>
                	</div>
                    <div class="box-body">
                      	<div class="row">
                      		<div class="col-sm-12">
                      			{!! Form::model($entity, ['route' => ['admin.update', $entity->id], 'method' => 'PATCH']) !!}
                              @include('backend.admin.form')
                      			{!! Form::close() !!}
                      		</div>
                      	</div>
                    </div>
                </div>
            </div>           
        </div>
    </section>
@endsection