@if(!empty($errors))

		@foreach($errors->all() as $err)
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{$err}}!</strong>
			</div>
		@endforeach

	@endif