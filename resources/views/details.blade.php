@include('header')

<div style="position: static;" class="col-md-9">
@foreach($just as $show)
<h3>{{$show->name}} </h3> 
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <div >
 
 {!! HTML::image('/images/'.$show->image, 'a picture',array('width' => 500 , 'height' => 340)) !!}
</div>

 <br/>
<ul class="list">
<?php 
$split=explode(',', $show->details);
foreach ($split as $key) {
	?>
<li><h4>{{$key}}</h4></li>

<?php 
}
?>
</ul>
@endforeach
</div>
