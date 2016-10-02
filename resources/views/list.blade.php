@include('header')


<ul class="list-unstyled">
@foreach($all as $show)
<li><h3><a href="{{ route('details',$show->id) }}">{{$show->name}}</a></h3></li>
@endforeach
</ul>
<br/><br/><br/><br/><br/><br/><br/>
<div style="float:right;">
{{$all->links()}}	
</div>

