@include('admin.adminheader')


@foreach($get as $show)
<a href="{{route('feedback',$show->id)}}">{{$show->name}}</a>

@endforeach
<div class="" >
{{$get->links()}}	
</div>