@extends('master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<br>
		<h3 align="center">Create</h3>
		<br>
		
		@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			@foreach($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif
		
		@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			<p>{{Session::get('success')}}</p>
		</div>
		@endif

		<form method="post" action="{{url('student')}}">
			{{csrf_field()}}
			
			<div class="form-group">
				<input type="text" name="first_name" class="form-control"  placeholder="Enter First Name" />
			</div>
			<div class="form-group">
				<input type="text" name="last_name" class="form-control"  placeholder="Enter Last Name" />
			</div>
			<div class="form-group">
				<input type="text" name="amount" class="form-control"  placeholder="Enter Amount" />
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary"/>
			</div>
		</form>
	</div>
</div>
@endsection
