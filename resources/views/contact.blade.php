@include('header')
  <div class="col-md-10 ">
      <div class="col-md-offset-2">

      @if(Session::has('status'))

      <p>{{ Session::get('status') }}</p>

      @endif

{!!  Form::open(array('url' => 'complain','class'=>"form-horizontal"));!!}

 <input type="hidden" name="_token" value="{{ csrf_token() }}">
   
        <legend class="text-center header">Contact us</legend>

        <div class="form-group">
          
        
            {{ $errors->first('name') }}
                <input id="fname" name="name" type="text" placeholder="Your Name" class="form-control input-lg">
          
        </div>
      

        <div class="form-group">
           
          
            {{ $errors->first('email') }}
                <input id="email" name="email" type="email" placeholder="Email Address" class="form-control input-lg">
  
        </div>

        <div class="form-group">
           
          
            {{ $errors->first('phone') }}
                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-lg">
         
        </div>

        <div class="form-group">
       
          
            {{ $errors->first('message') }}
                <textarea class="form-control input-lg" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
         
        </div>

        <div class="form-group">
       
                <center><button type="submit" class="btn btn-primary btn-lg">Submit</button></center>
        
        </div>
  
{!!  Form::close(); !!}
  </div>
  </div>