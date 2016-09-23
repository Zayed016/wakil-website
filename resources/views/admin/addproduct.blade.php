@include('admin.adminheader')
@if(Session::has('status'))
{{ Session::get('status') }}
@endif
<div class="col-md-5"> 
 {!!  Form::open(array('url' => 'productadd','class'=>"form-horizontal", 'files' => true));!!}
	  {!! csrf_field() !!}
 <fieldset class="form-group">
 <label for="name">Type:</label>
<select name="type" class="form-control">
@foreach($get as $show)	
<option class="form-control " value="{{$show->id}}">{{$show->name}}</option>
@endforeach
</select>
</fieldset>
 <fieldset class="form-group">
<label for="name">Name:<p style="color:red;">{{ $errors->first('name') }}</p></label>
<input type="text" class="form-control " name="name" value="" placeholder="">

</fieldset>
 <fieldset class="form-group">
<label for="name">Details:<p style="color:red;">{{$errors->first('details')}}</p></label>
<input type="text" class="form-control " name="details" value="" placeholder="">
</fieldset>
 <fieldset class="form-group">
<label for="name">Image:<p style="color:red;">{{$errors->first('image')}}</p></label>
<input type="file" class="form-control " name="image" value="" placeholder="">
</fieldset>

 <fieldset class="form-group">
<input type="submit" class="btn btn-success" value="Submit" />
</fieldset>
   {!!  Form::close(); !!}

</div>