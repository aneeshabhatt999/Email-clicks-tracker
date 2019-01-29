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
            <h1>CREATE CAMPAIGN</h1>
            <div class="row">
            <div class="col-25">
            <label for="email">Select Email</label>
            </div>
            <div class="col-75">
            <select id="email" name="E mail">
                <option value="email">All</option>
            @foreach($emails_list as $email)
            <option value="{{$email->email}}">{{$email->email}}</option>
            @endforeach
        </select>
            </div>
            </div><br>
            <div class="row">
            <div class="col-25">
            <label for="subject">Subject</label>
            </div>
            <div class="col-75">
            <textarea id="subject" name="subject"  style="width:700px;height:60px;"></textarea>
            </div>
            </div><br>
            <div class="row">
            <div class="col-25">
            <label for="body">Body</label>
            </div>
            <div class="col-75">
          
            <textarea id="body" name="body" style="width:700px;height:200px"></textarea>


            </div>
            </div><br>
        


            
            <div align="right" class="checkDIV">
 
            <label><input type="checkbox" onclick="myFunction()" />Track</label><br>
            
             </div>
        
            
            <div class="row">
            <input type="submit" value="Create campaign" style="width:130px;height:40px;">
            </div>

            </fieldset>
                
     </form>


     </div>
@endsection
    </body>
</html>   