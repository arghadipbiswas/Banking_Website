<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
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
                        <legend class="text-center header">Apply for Web Developer Post</legend>

                        <?php

include 'connection.php';

$ids = $_GET['id'];

$showquery = "select * from jobregistration where id={$ids}";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['submit'])){

    $idupdate = $_GET['id'];

    $name = $_POST['user'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobprofile = $_POST['jobprofile'];

    // $insertquery = "insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$degree','$mobile',' $email',' $refer','$jobprofile')";

    $query = " update jobregistration set id='$idupdate', name='$name', degree='$degree', mobile='$mobile', email='$email', refer='$refer', jobpost='$jobprofile' where id=$idupdate ";

   $res = mysqli_query($con,$query);

   if($res)
   {
       ?>
       <script>
           alert("data Updated properly");
       </script>
       <?php
   }else{
    ?>
    <script>
        alert("data Not Updated");
    </script>
    <?php
   }
}

?>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="user" value="<?php echo $arrdata['name']; ?>" type="text" placeholder="Enter your name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="degree" value="<?php echo $arrdata['degree']; ?>" type="text" placeholder="Enter your qualification" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" value="<?php echo $arrdata['email']; ?>" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="mobile" value="<?php echo $arrdata['mobile']; ?>" type="text" placeholder="mobile number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="refer" value="<?php echo $arrdata['refer']; ?>" type="text" placeholder="any reference" class="form-control">
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="jobprofile" value="<?php echo $arrdata['jobpost']; ?>" placeholder="Job post" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" name="submit">Update</button>
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

