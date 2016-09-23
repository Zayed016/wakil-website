{!! Html::style('css/bootstrap.css') !!}
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::style('css/bootstrap-theme.css') !!}
{!! Html::style('css/bootstrap-theme.min.css') !!}
{!! Html::style('css/mycss.css') !!}
{!! HTML::script('css/font-awesome.css'); !!}
{!! HTML::script('css/font-awesome.min.css'); !!}
{!! HTML::script('js/bootstrap.js'); !!}
{!! HTML::script('js/bootstrap.min.js'); !!}
{!! HTML::script('js/jquery.js'); !!}
{!! HTML::script('js/jquery-1.9.1.min.js'); !!}
{!! HTML::script('js/npm.js'); !!}


<div class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-10">
  	<ul class="nav nav-pills" style="font-size:22px;">
	<br/>	

	<li><a href="{{ route('addproduct') }}">Add new Product</a></li>
 	<li><a href="{{ route('productlist') }}">List of product</a></li>

	    
	</ul>