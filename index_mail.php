<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
            <h1>Email OTP Verification</h1>
        
        <style type="text/css">
            main{ width: 70%; margin: auto; max-width: 100%;}
            input{ width: 100%; padding: 10px; margin: 10px; }
            section{ margin-top: 25px;}
            button{ width: 100%; padding: 15px; background-color: blue; color: white; }
            h1{ text-align: center; } 
        </style>
        
        <main>
        <section id="otpForm">
            <div class="otpFields">
                <input type="name" id="name" placeholder="Your Name" name="name" />
            </div>
            <div class="otpFields">
                <input type="email" id="email" placeholder="Enter Email" name="email" />
            </div>
            <div class="otpFields">
                <button id="submit" onclick="getOTPNumber(); ">Submit</button>
            </div>

        </section>
        
        <section id="optVerificationField">
            <div class="otpVerifiy">
                <input type="text" id="otpVerify" name="otpVerify" placeholder="Enter Email OTP" />
            </div>
            <div class="otpVerifiy">
                <button id="submitOTP" onclick="validateOTP();">Verify OTP</button>
            </div>
            
        </section>
        
        </main>
        
        
	</body>
    
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        
        var getOTPNumberCode = ''; 
        
        function getOTPNumber(){
            var email = jQuery('#email').val();
            var name = jQuery('#name').val();
            
            var data = { 'name': name, 'email': email}; 
            
            $.ajax({
                type: 'POST',
                url: 'mail.php',
                data: data,
                dataType : 'JSON',
                success : function(data){
                    console.log(data);
                
                    getOTPNumberCode = data; 
                    
                    alert('Please Check Your mail for OTP');
                }
            });
            
            
        }
        
        function validateOTP(){
            
            var otpVerify = jQuery('#otpVerify').val();
            
            if(otpVerify != getOTPNumberCode){
                alert('Please Check your email again OTP is wrong.');
                return false; 
            }else{
                alert('OTP is correct, Pleaes Login');
                jQuery('#submitOTP').html('Pleae Login, OTP Done');;
                
                setTimeout(function(){
                    
                    window.location.href = 'https://github.com/VaskarPal'; 
                    
                }, 4000);
            
            }
            
            
            
            
        }
        
    </script>
    
    
    
</html>