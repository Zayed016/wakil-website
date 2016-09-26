@include('header')

 
 <div class="col-sm-6">
 <br/><br/><br/><br/>
  
 
 <div  style="float: right;">
<center style="color:green;font-size:200%">Admin login panel</center>
	 <br/><br/><br/>
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