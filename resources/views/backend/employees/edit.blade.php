@extends('layouts.backend.main')
@section('content')
    <section class="content-header">
        <h1>
            Employees
            <small>Edit employee</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Employees</a></li>
            <li class="active">Edit employee</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Edit employee</h3>
                    </div>
                    <div class="box-body">
                        {!! Form::model($entity, ['route' => ['employees.update', $entity->id], 'method' => 'PATCH']) !!}
                            @include('backend.employees.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection