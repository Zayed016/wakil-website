@include('admin.adminheader')
 
<br/>
@if(Session::has('status'))
{{ Session::get('status') }}
@endif

{!!  Form::open(array('url' => 'listnojs','method'=>'get','class'=>"form-horizontal"));!!}

 <b><select class="form-control input-md"  name="id" >
 <option value="">Select A type of food</option>
  @foreach ($lists as $list)
  <option value="{{$list->id}}">{{$list->name}}</option>
  @endforeach
   </select></b>
    <button type="submit" class="btn btn-primary">Get</button>
   {!!  Form::close(); !!}

@if( ! empty($get))
<div  class="col-md-6">
<ul class="list-unstyled">
@foreach($get as $show)
<li><h3><a href="{{ route('details',$show->id) }}">{{$show->name}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="{{ route('deleteproduct',$show->id)}}">Delete</a></h3></li>
@endforeach
</ul>
<br/><br/><br/><br/><br/><br/><br/>
<div style="float:right;">

{{ $get->appends(['id' => Input::get('id')])->render() }}
</div>
</div>
@endif


