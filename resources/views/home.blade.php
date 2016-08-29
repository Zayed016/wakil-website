@include('header')

<ul class="list-unstyled">
@foreach($get as $show)
<li><h4><a href="{{ route('list',$show->id) }}">{{$show->name}}</a></h4></li>
@endforeach
</ul>
