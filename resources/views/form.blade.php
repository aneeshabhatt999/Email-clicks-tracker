<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <title>Create Campaign</title>

        <style>

            body{
     	         font-family: 'Italic', serif;
     	         font-size:20px;
     	         font-weight: 300;
                 height: 400vh;
                 text-align: center;
                 }  

            .fieldset-auto-width {
                 display: inline-block;
                 text-align: left;
                 }
                 
                     .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
        
        </style>
     
    </head>
    <body>
        
   @if($message= Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message}}</strong>
</div>
   @endif
  
@extends('layouts/layout_form')

        
@section('content')

        
            
        <form action="{{ url('create_campaign/send')}}" method="post">

            {{csrf_field()}}

 
            <fieldset class="fieldset-auto-width">


            <h1 <i style='font-size:24px' class='far'>&#xf0e0;</i> CREATE CAMPAIGN</h1>
            
            <div class="form-group">
            <label for="email" >Select Email</label><br>          
            
            

            <select  class="custom-select custom-select-lg mb-3" id="email" name="E mail">
            <option value="email">All</option>
            @foreach($emails_list as $email)
            <option value="{{$email->email}}">{{$email->email}}</option>
            @endforeach
        </select>
    </div>

 
            <div class="form-group">
            <label for="subject" >Subject</label>
            <textarea id="subject" name="subject" class="form-control"  style="width:700px;height:60px;"></textarea>
            </div>

            <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control"  style="width:700px;height:200px;"></textarea>
            </div>

            <div align="right" class="checkDIV">
            <label><input type="checkbox" name="checkbox" id="checkbox" />Track</label><br>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block" >Create Campaign</button>
            </fieldset>
            
        </form>
    

@endsection

</body>
</html>   