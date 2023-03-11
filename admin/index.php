<?php

if ($_POST){
    header('location:start.php');

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      


            <div class="container">
                <div class="row">

                <div class="col-md-4">
                </div>
                
                    <div class="col-md-4">
                    <br/><br/><br/><br/><br/><br/>
        <div class="card">
            <div class="card-header">
                Login
            <div class="card-body">
                <form method="POST">
                <div class = "form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="Username" aria-describedby="emailHelp" placeholder="Enter Username">
                <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" ref= "" class="btn btn-primary">Sign In</button>
                </form>
                
                
                
                

            </div>
        
            </div>
            
            </div>
        </div>