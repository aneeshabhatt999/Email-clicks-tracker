<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/
    
    </head>
    <body>

        @extends('layouts/layout_home')
        @section('content')
        <div class="flex-center position-ref full-height">
        <div class="container">
        <div class="row">
        <div class="content">
        <div class="links">
          <ul>            
            <li><a href="admin">Admin</a></li>
            <li><a href="form">Create Campaign</a></li>
            <li><a href="add_email">Add email</a></li>
         </ul>
        </div>
        </div>

         <div class="panel-body">
             @if (session('status'))
                <div class="alert alert-success">
                     {{ session('status') }}
                </div>
             @endif
         </div>
         </div>
         </div>                 
    
@endsection
