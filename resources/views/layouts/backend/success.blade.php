@if (Session::has('success')) 
<div class="box-body">
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
  				<ul>
					<li>{{ Session::get('success') }}</li>
				</ul>
			</div>	
		</div>
	</div>
</div>
@endif