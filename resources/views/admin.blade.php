<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

@extends('layouts/layout_admin')
<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Recipient</th>
      
      <th scope="col">Number of emails opened</th>
    </tr>
  </thead>
  <tbody>
            

    <tr>
            
       <td>
                        @foreach($emails_list as $email)
          
            {{$email->email}}<br>
               @endforeach
      </td>
             <td>
                        @foreach($emails_list as $count)
          
            {{$count->count}}<br>
               @endforeach
      </td>
   
 </tr>




  </tbody>
</table>


</body>
</html>
