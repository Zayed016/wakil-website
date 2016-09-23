@include('admin.adminheader')
{!!  Form::open(array('url' => 'editing'));!!}
@foreach($get as $show)
<label for="username"> Name </label>
<input type="hidden" name="id" value="{{$show->id}}">
	<input type="text" class="form-control" name="name" value="{{$show->name}}">
		</fieldset>
		<label for="username"> Details </label>
	<input type="text" class="form-control" name="details" value="{{$show->details}}">
		</fieldset>
@endforeach
<button type="submit" class="btn btn-primary">Submit</button>
{!!  Form::close(); !!}