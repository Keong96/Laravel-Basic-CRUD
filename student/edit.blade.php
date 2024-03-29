@extends('master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<br>
		<h3 align="center">Edit Record</h3>
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

		<form method="post" action="{{action('StudentController@update',$id)}}"> 
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH" />
			<div class="form-group">
				<input type="text" name="first_name" class="form-control" value="{{$student->first_name}}" placeholder="Enter First Name" />
			</div>
			<div class="form-group">
				<input type="text" name="last_name" class="form-control" value="{{$student->last_name}}" placeholder="Enter Last Name" />
			</div>
			<div class="form-group">
				<input type="text" name="amount" class="form-control" value="{{$student->amount}}" placeholder="Enter Amount" />
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Edit"/>
			</div>
		</form>
	</div>
</div>
@endsection