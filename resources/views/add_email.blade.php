<!DOCTYPE html>
<html>
   <head>
   	<title>Add emails here</title>
   </head>
   <body>
   	<form action="{{ url('store')}}" method="post">
         {{csrf_field()}}
   		    <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <textarea id="email" name="email" ></textarea>
            </div>
            </div><br>

            <div class="row">
            <input type="submit"  value="Add email">
            </div>
        </form>
    </body>
    </html>

