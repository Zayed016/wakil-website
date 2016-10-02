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
<body onload="list()">
  <script>
function list() {
	
            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("too").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","http://localhost/wakil/public/justlist");
        xmlhttp.send();
    }
</script>

    <style>

li.ex:hover {
    background-color: lightgrey;
}


</style>
<div class="row">
<div class="container" >
<div style="clear: both;" class="container-fluid">
   <nav  style="padding: 10px 10px 10px 30px;" class="navbar navbar-default navbar-fixed-top">



    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Tech company</a> 
       &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
    </div>

    <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul style= "font-size:180%;" class="nav navbar-nav">
         <li><a href="{{ route('home') }}">Home</a></li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <div style="font-size:160%;" id="too"></div>
        </ul>
      </li>
       	<li><a href="{{ route('about') }}">About Us</a></li>
      	<li><a href="{{ route('contact') }}">Contact Us</a></li>
     <li> 
      {!!  Form::open(array('url' => 'search','method'=>'get','class'=>'navbar-form navbar-left'));!!}
           <div class="form-group">
          <input type="text" name='look' class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
         {!!  Form::close(); !!}
      </li>
      </ul>
      </div>
      
</div>
</nav>
</div>
</div>
</div>


<div style="padding-top: 80px;" >


</div>
<div class="row">
<div class="container" >
<div class="container-fluid">
<div class="col-md-offset-1">
 <div class="col-md-10"> 

{!! HTML::script('js/bootstrap.min.js'); !!}

