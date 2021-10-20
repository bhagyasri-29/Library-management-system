<?php 
    session_start(); 
    if(isset($_POST['submit']))
    {
	                $_SESSION['email']=$_POST['email1'];
	                $_SESSION['pass']=$_POST['pass1'];
	 				header("Location:http://localhost/library%20management/logingate.php");
	 }              
   
   ?>


<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="register.css">
	<style type="text/css">
		body{
            background-image: url('lib2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;  
            //overflow: hidden; 
        }
        h1{
            background-color: /*rgba(0,0,0,0.6)*/;
            font-size:50px;
            text-align: center;
            padding: 30px;
            color:grey;
            //border: 2px solid white;
        }
       .butt1{
       	padding:10px;
       }
        .butt1 a{
        	text-decoration: none;
        	color:white;
        	//border: 1px solid black;
        	font-size: 23px;
        	padding-right: 40px;
        	padding-left: 40px;
        }
        .butt4{
        	padding: 10px 25px;
        }
        button:first-child{
        	width:160px;
        	
        }
        button:not(:first-child){
        	float:right;
        	margin-left: 20px;
        }
        
     
      #q{
      	padding: 8px 80px;
      	margin-left: 0;
      	padding-left: 40px;padding-right: 50px; text-align: center;
      }
      input .li:hover{
      	opacity:1;			
      }


a {font-size: 20px}
a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}
	
</style>
</head>

<body>
	<div class="container">
<h1 style="text-align:center;text-color:grey; background-color: rgba(255,255,255,0);
;margin-left: 80px;margin-right:80px;height: 140px; padding-top: 30px;padding-bottom:10px;font-size:60px;">NALANDA&nbsp;&nbsp;LIBRARY</h1>
	
			<div id="h3" class="form">
		        <form class="login-form" name='f1' onsubmit="return validation()" id="frm1" action="#" method="POST">
	            	
						<?php if(!empty($_GET['message'])){$bd=$_GET['message']; echo '<h4 style="color:red">'.$bd.'</h4>';} ?>
	                <div class="aa"><input type="email" placeholder="EMAIL" name="email1" id="rd1" required/></div>
	                <div class="aa"><input type="password" placeholder="PASSWORD" name="pass1" id="rd2" maxlength="20" required/></div>
	                <!-- <button class="aa">Login</button>  -->
	                
	                <input type="submit" value="Login" name="submit" class="aa li" style="background-color: green;color: white;">
	                <!-- <button>LOG IN</button> -->
	                
                        <a href="register.php#h4">Not Registered?</a></p>
			    </form>
		    </div><br/><br/>

		        
		      
		  

		    
		  
	</div>
	
</body>



 
</html>

