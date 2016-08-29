{!!  Form::open(array('url' => 'editing'));!!}
@foreach($one as $show)
<label for="username"> Username </label>
	<input type="text" class="form-control" name="username" value="{{$show->name}}">
		</fieldset>
		<label for="username"> Details </label>
	<input type="text" class="form-control" name="username" value="{{$show->details}}">
		</fieldset>
@endforeach
<button type="submit" class="btn btn-primary">Login</button>
{!!  Form::close(); !!}