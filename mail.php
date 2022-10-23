
<?php 


if(isset($_POST['email'])){
    
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    
    $six_digit_number = random_int(100000, 999999);
    
   
    $mailBody = '<div style="text-center: center; width: 60%; margin: auto; max-width: 100%; font-family: Arial;  ">
    <div><h1>OTP VerificationNumber</h1></div>
    <div>Hi, '.$name.'</div>
    <div style="margin: 20px 0px;"><span style="background-color: #000; color: #FFF; padding: 10px;  ">'.$six_digit_number.'</span></div>
    <div>Please use the above OTP to complete registration</div>
    <div><img src="https://myfreeonlinetools.com/images/logo.png" style=" width: 450px; margin: 20px 0px; "></div>
    </div>';
    
    
    $subject = "MyFreeOnlineTools -  OTP (One Time Password)";
    $from = 'vaskarpaul053@gmail.com';
    $to = $email; 
    $emailFrom = 'MyFreeOnlineTools'; 
    $headers = 'From: '. $emailFrom ."\r\n";
    $headers .= 'Reply-To: '. $to ."\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n".'X-Mailer: PHP/' . phpversion();

    
    if($email != ''){
        
        mail($to, $subject, $mailBody, $headers);
        
    }
 echo $six_digit_number; 
    

}



?>