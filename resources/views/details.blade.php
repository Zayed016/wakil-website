@include('header')
@foreach($just as $show)
<h3>{{$show->name}}
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="/images/<?=$show->image?>" alt="" style="width:304px;height:228px;">
 </h3> 
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
