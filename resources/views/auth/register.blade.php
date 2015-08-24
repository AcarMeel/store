@extends('store.template')
@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-user-plus"></i>Register</h1>
		</div>

		<div class="col-md-offset-2 col-md-8">
			<div class="page">
				@include('store.partials.errors')
					<form method="POST" action="/auth/register" class="form-horizontal">
					    {!! csrf_field() !!}
						<fieldset>
							<div class="form-group">
						        <label  class="col-lg-2">Name</label>
						        <div class="col-lg-10">
						        	<input type="text" name="name" value="{{ old('name') }}" class="form-control">
						        </div> 
						        
						    </div>

						    <div class="form-group">
						        <label for="" class="col-lg-2">LastName</label>
						        <div class="col-lg-10">
						         <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control">
						     </div> 
						       
						    </div>

						    <div class="form-group">
						        <label for="" class="col-lg-2">Email</label>
						        <div class="col-lg-10">
						        	<input type="email" name="email" value="{{ old('email') }}" class="form-control">
						        </div> 
						        
						    </div>

						    <div class="form-group">
						        <label for="" class="col-lg-2">UserName</label>
						        <div class="col-lg-10">
						        	<input type="text" name="user" value="{{ old('user') }}" class="form-control">
						        </div> 
						        
						    </div>

						    <div class="form-group">
						        <label for="" class="col-lg-2">Password</label>
						        <div class="col-lg-10">
						        	<input type="password" name="password" class="form-control">
						        </div> 
						        
						    </div>

						    <div class="form-group">
						        <label for="" class="col-lg-2">Confirm Password</label>
						        <div class="col-lg-10">
						        	<input type="password" name="password_confirmation" class="form-control">
						        </div> 
						        
						    </div>

						    <div class="form-group">
						        <label for="" class="col-lg-2">Address</label> 
						        <div class="col-lg-10">
							       <textarea class="form-control" name="address">{{ old('address') }}</textarea>
						      </div>
						    </div>

						    <div class="form-group">
						    	<div class="col-md-offset-2 col-lg-10">
						    		<button type="submit" class="btn btn-info">Register</button>
						    	</div>
						        
						    </div>
						</fieldset>

				</form>
			</div>
		</div>
	</div>
@stop