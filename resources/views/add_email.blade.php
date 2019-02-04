<!DOCTYPE html>
<html>
   <head>
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <title>Add emails here</title>

   </head>
   <body>
    <form action="{{ url('store')}}" method="post">
         {{csrf_field()}}
           <div class="form-group">
      
            <label for="email">Email</label><br>
            <textarea id="email" name="email" ></textarea>
            </div><br>
      
        <button type="submit" class="btn btn-primary btn-lg btn-block" >Add email</button>          
        </form>
    </body>
    </html>
