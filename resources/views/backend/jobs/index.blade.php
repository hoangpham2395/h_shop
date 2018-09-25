@extends('layouts.backend.main')

@section('content')
    <section class="content-header">
        <h1>
            Jobs
            <small>List of Jobs</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Jobs</a></li>
            <li class="active">List of Jobs</li>
        </ol>
    </section>

    @include('layouts.backend.notify')

    <!-- Search -->
    <section class="content content-custom">
    	<div class="row">
    		<div class="col-md-12 col-sm-12 col-xs-12">
    			<div class="box box-info">
    				<div class="box-header">
    					<h3 class="box-title">Search</h3>
    				</div>
    				<div class="box-body">
    					{!! Form::open(['route' => 'jobs.index', 'method' => 'GET']) !!}
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										{!! Form::label('job_name', 'Job name:') !!}
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-suitcase"></i>
											</span>
											{!! Form::text('job_name', null, ['class' => 'form-control']) !!}
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<a href="{{route('jobs.index')}}" class="btn btn-default">
										<i class="fa fa-refresh"></i> Reset
									</a>
									{!! Form::button('<i class="fa fa-search"></i> Search', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
								</div>
							</div>
    					{!! Form::close() !!}
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">List of Jobs</h3>
                    </div>
                    <div class="box-body">
                        <div class="row padding-bottom">
                        	@php 
								$limits = getConfig('limits'); 
                    		@endphp
                            <div class="col-sm-6">
                            	Show &nbsp;
                            	<select class="" name="limit">
                            		@foreach ($limits as $limit)
										<option value="{{$limit}}">{{$limit}}</option>
                            		@endforeach
                            	</select>
                            	&nbsp; entities.
                            </div>
                            <div class="col-sm-6">
                            	<button type="button" class="btn btn-success pull-right"data-toggle="modal" data-target="#modal_create">
                                    <i class="fa fa-plus"></i> Add new job
                                </button>
                            	{!! Form::open(['route' => 'jobs.store', 'method' => 'POST']) !!}
                            	<!-- Modal -->
                                <div class="modal fade" id="modal_create" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Add new job</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                	<div class="col-md-12">
                                                		<div class="form-group">
                                                			{!! Form::label('job_name', 'Job name:') !!} 
                                                			<span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
                                                			<div class="input-group">
                                                				<span class="input-group-addon">
                                                					<i class="fa fa-suitcase"></i>
                                                				</span>
                                                				{!! Form::text('job_name', null, ['class' => 'form-control', 'required']) !!}
                                                			</div>
                                                		</div>
                                                	</div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Confirm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <th width="80" class="text-center">ID</th>
                                <th>Job name</th>
                                <th width="80" class="text-center">Edit</th>
                                <th width="80" class="text-center">Delete</th>
                                </thead>
                                <tbody>
                                @foreach ($entities as $entity)
                                    <tr>
                                        <td>{{ $entity->id }}</td>
                                        <td>{{ $entity->job_name }}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_upd_{{$entity->id}}"><i class="fa fa-pencil"></i></button>
                                        </td>

										{!! Form::model($entity, ['route' => ['jobs.update', $entity->id], 'method' => 'PATCH']) !!}
                                    	<!-- Modal -->
                                        <div class="modal fade" id="modal_upd_{{$entity->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">Update</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                    	<div class="row">
	                                                        <div class="col-md-12">
		                                                		<div class="form-group">
		                                                			{!! Form::label('job_name', 'Job name:') !!} 
		                                                			<span class="color-red">[<i class="fa fa-asterisk"></i>]</span>
		                                                			<div class="input-group">
		                                                				<span class="input-group-addon">
		                                                					<i class="fa fa-suitcase"></i>
		                                                				</span>
		                                                				{!! Form::text('job_name', null, ['class' => 'form-control', 'required']) !!}
		                                                			</div>
		                                                		</div>
		                                                	</div>
		                                                </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Confirm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}

                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#modal_del_{{$entity->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>

                                    	{!! Form::open(['route' => ['jobs.destroy', $entity->id], 'method' => 'DELETE']) !!}
                                    	<!-- Modal -->
                                        <div class="modal fade" id="modal_del_{{$entity->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
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
                        <div class="row">
                            <div class="col-sm-5 table-info">Showing 1 to 10 of 10 entities</div>
                            <div class="col-sm-7 table-paginate">{{ $entities->appends(Request::except('page'))->render() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection