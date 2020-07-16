<?php
 $conn = mysqli_connect("localhost", "id14341796_subscribe", "Halimat_$123", "id14341796_email");
 if(!$conn){
     die("unable to connect");
 }

 if (isset($_POST['save'])){
     $email = $_POST['email'];
     echo $email;
     if($email != ""){ $sql = "INSERT INTO subscribers (email)
     VALUES ('$email')"; 

     $result = mysqli_query($conn,$sql);

     if($result){
          echo "<script>window.location.href='home.html'</script>";
                 }
     }
 }   
    
?> 


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subscription</title>
        <!-- bootstrap web file  -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
        <!-- bootstrap file -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- my css file -->
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
<!--main section-->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4 text-center head">
                    <img src="logo (2).png" alt="">
                    <h1 class="sub">Subscribe to our upcoming project</h1>
                    <form method="post" action = "index.php">
                        <label id="first"class="text"><strong>Email</strong></label>
                        <input type="email" name="email" placeholder="Enter Email Address" class="form-control form-control-lg">
                        <button class="btn btn-lg btn-success btn-block link" name="save" type="submit">Submit</button>
                    </form>
                </div>
        </div>
    </div>
</section>

<!--footer section-->
<footer class="text-center contact">
    <p>All rights Reserved @MicroApi</p>
</footer>
    </body>
</html>
