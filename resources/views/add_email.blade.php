<!DOCTYPE html>
<html>
   <head>
   	<title>Add emails here</title>
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
   	<form action="{{ url('store')}}" method="post">
         {{csrf_field()}}
            <fieldset class="fieldset-auto-width">
            <form>
            <div class="form-group">
            <label for="email">Email </label><br>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" style="width:700px;height:40px;">
            </div><br>
            <button type="submit" class="btn btn-primary btn-lg btn-block" >Add Email</button>
            
          </fieldset>
        </form>
    </body>
    </html>

