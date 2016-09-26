@include('header')

<div  class="col-md-8">
@if(Session::has('status'))
<br/><br/><br/><br/>
<center><b style="color:red;font-size: 200%;">{{ Session::get('status') }}</b></center>
@else
<ul class="list-unstyled">
@foreach($get as $show)
<li><h3><a href="{{ route('details',$show->id) }}">{{$show->name}}</a></h3></li>
@endforeach
</ul>
<br/><br/><br/><br/><br/><br/><br/>
<div style="float:right;">
{{ $get->appends(['look' => Input::get('look')])->render() }}
@endif
</div>
</div>
