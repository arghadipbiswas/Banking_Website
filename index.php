<!DOCTYPE html>
<html lang="en">
<head>
  <title>Deposite</title>
  <?php include 'links.php' ?>
  <style>
    .header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}

  </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Apply for Deposite Form</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="user" type="text" placeholder="Enter your name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="degree" type="text" placeholder="Enter Your Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="mobile" type="text" placeholder="mobile number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="refer" type="text" placeholder="Nomine" class="form-control">
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="jobprofile" placeholder="Any Massege" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" name="submit">Register</button>
                            </div>
                        </div>
                        <br>
                        <a href="display.php" type="button" class="btn btn-primary" target="_blank">Check Form</a>
                        <br>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php

include 'connection.php';

if (isset($_POST['submit'])){
    $name = $_POST['user'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobprofile = $_POST['jobprofile'];

    $insertquery = "insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$degree','$mobile',' $email',' $refer','$jobprofile')";

   $res = mysqli_query($con,$insertquery);

   if($res)
   {
       ?>
       <script>
           alert("data inserted properly");
       </script>
       <?php
   }else{
    ?>
    <script>
        alert("data Not inserted");
    </script>
    <?php
   }
}

?>