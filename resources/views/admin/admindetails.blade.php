
@foreach($just as $show)
<a href="{{ route('edit',$show->id) }}">Edit</a>
{{$show->name}}

<!-- <img src="/images/{{$show->image}}" alt=""> -->
<?php 
$split=explode(',', $show->details);
foreach ($split as $key) {
	echo $key." <br/>";
}
 ?>
@endforeach