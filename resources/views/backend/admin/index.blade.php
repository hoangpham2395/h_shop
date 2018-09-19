@extends('layouts.backend.main')

@section('content')
	<section class="content-header">
        <h1>
            Admin
            <small>List of Admin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
            <li class="active">List of Admin</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-info">
                	<div class="box-header">
                		<h3 class="box-title">List of Admin</h3>
                	</div>
                    <div class="box-body">
                      	<div class="row">
                      		<div class="col-sm-6"></div>
                      		<div class="col-sm-6"></div>
                      	</div>  
                      	<div class="row">
                      		<div class="col-sm-12">
                      			<table class="table table-bordered table-striped">
                      				<thead>
                      					<th>ID</th>
                      					<th>Email</th>
                      					<th>Name</th>
                      					<th>Phone</th>
                      					<th>Detail</th>
                      				</thead>
                      				<tbody>
                      					@foreach ($entities as $entity)
											<tr>
												<td>{{ $entity->id }}</td>
												<td>{{ $entity->email }}</td>
												<td>{{ $entity->name }}</td>
												<td>{{ $entity->phone }}</td>
												<td><a href="#" class="btn btn-sm btn-primary"><i class="fa fa-info"></i></a></td>
											</tr>
                      					@endforeach
                      				</tbody>
                      			</table>
                      		</div>
                      	</div>
                      	<div class="row">
                      		<div class="col-sm-5"></div>
                      		<div class="col-sm-7"></div>
                      	</div>
                    </div>
                </div>
            </div>           
        </div>
    </section>
@endsection