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
                  @include('layouts.backend.success')
                  <div class="box-body">
                    	<div class="row">
                    		<div class="col-sm-6"></div>
                    		<div class="col-sm-6"></div>
                    	</div>  
                    	<div class="row">
                    		<div class="col-sm-12">
                    			<table class="table table-bordered table-striped">
                    				<thead>
                    					<th width="50">ID</th>
                    					<th>Email</th>
                    					<th>Name</th>
                    					<th>Phone</th>
                    					<th width="50" class="text-center">Edit</th>
                              <th width="50" class="text-center">Delete</th>
                    				</thead>
                    				<tbody>
                    					@foreach ($entities as $entity)
          											<tr>
          												<td>{{ $entity->id }}</td>
          												<td>{{ $entity->email }}</td>
          												<td>{{ $entity->name }}</td>
          												<td>{{ $entity->phone }}</td>
          												<td class="text-center"><a href="{{route('admin.edit', $entity->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a></td>
                                  <td class="text-center">
                                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-trash"></i>
                                      </button>
                                  </td>
                                  {!! Form::open(['route' => ['admin.destroy', $entity->id], 'method' => 'DELETE']) !!}
                                              
                                  <!-- Modal -->
                                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              <h4 class="modal-title" id="myModalLabel">Delete</h4>
                                            </div>
                                            <div class="modal-body">
                                              Are you sure?
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      {!! Form::close() !!}
          											</tr>
                    					@endforeach
                    				</tbody>
                    			</table>
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="col-sm-5">Showing 1 to 10 of 10 entities</div>
                    		<div class="col-sm-7">{{ $entities->links() }}</div>
                    	</div>
                  </div>
                </div>
            </div>           
        </div>
    </section>
@endsection