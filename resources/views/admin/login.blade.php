@include('header')

<div class="container">
  <div class="row">
  <div class="col-md-4 col-md-offset-2">
  	

 <div>

 <br/><br/><br/><br/>
  
 
 <div class="panel panel-default" >
<center  class="panel-heading" style="color:green;font-size:200%">Admin login panel</center>
<div class="panel-body">

	 {!!  Form::open(array('url' => 'into'));!!}
	  {!! csrf_field() !!}
	<label><p style="color:red"> {{$errors->first('need')}}</p></label>
	<label><p style="color:red"> {{ $errors->first('username')}}</p></label>
	<fieldset class="form-group">
	<label for="username"> Username </label>
	<input type="text" class="form-control" name="username" value="{{ old('username') }}">
	</fieldset>
	<label><p style="color:red"> {{ $errors->first('password') }}</p></label>
	<fieldset class="form-group">
	<label for="address"> Password </label>
	<input type="password" class="form-control" name="password" value="">
	
	</fieldset>
	<button type="submit" class="btn btn-primary">Login</button>
	   {!!  Form::close(); !!}
	   </div>
</div>
  </div>
    </div>

</div>
</div>