<!DOCTYPE html>
<html>
    <head>
        <title>Create Campaign</title>

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>

            body{
     	         font-family: 'Italic', serif;
     	         font-size:20px;
     	         font-weight: 300;
                 height: 400vh;
                 text-align: center;
                 background-image:  url("/images/img5.jpg");
                 

                }  

            .fieldset-auto-width {
                 display: inline-block;
                 text-align: left;
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
<div class="container">
    
        <form action="{{ url('create_campaign/send')}}" method="post">

            {{csrf_field()}}

 
            <fieldset class="fieldset-auto-width">
            <h1 style="color:Azure;">CREATE CAMPAIGN</h1>
            
            <div class="form-group">
            <label for="email" style="color:Azure;">Select Email</label><br>          
            <select class="custom-select custom-select-lg mb-3">
            <option selected>All</option>
             @foreach($emails_list as $email)
             <option value="{{$email->email}}">{{$email->email}}</option>
            @endforeach
            </select>
            </div>
 
            <div class="form-group">
            <label for="subject" style="color:Azure;">Subject</label>
            <textarea id="subject" name="subject" class="form-control"  style="width:700px;height:60px;"></textarea>
            </div>

            <div class="form-group">
            <label for="body" style="color:Azure;">Body</label>
            <textarea id="body" name="body" class="form-control"  style="width:700px;height:200px;"></textarea>
            </div>
            
            <div class="form-group">
            <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1" style="color:Azure;">Track</label>
            </div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg btn-block" style="color:Azure;">Create Campaign</button>
            
            </fieldset>
        </form>
</div>
@endsection
</body>
</html>   