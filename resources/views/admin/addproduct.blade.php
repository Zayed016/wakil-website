@if(Session::has('status'))
{{ Session::get('status') }}
@endif
 {!!  Form::open(array('url' => 'productadd','files' => true));!!}
	  {!! csrf_field() !!}

<select name="type">
@foreach($get as $show)	
<option value="{{$show->id}}">{{$show->name}}</option>
@endforeach
</select>
{{$errors->first('name')}}
<input type="text" name="name" value="" placeholder="">
{{$errors->first('details')}}
<input type="text" name="details" value="" placeholder="">
{{$errors->first('image')}}
<input type="file" name="image" value="" placeholder="">
<input type="submit" class="btn btn-success" value="Buy" />
   {!!  Form::close(); !!}

