<?php
  session_start();
if(isset($_POST['reg']))
{

  if(($_POST['pass']==$_POST['confpass']) && (strlen($_POST['pass'])>=8))
{
     $id=$_POST['id'];
    $conn=new mysqli('localhost','root','','library');
    $sqls="SELECT * FROM register WHERE Id='$id'";
    $re=$conn->query($sqls);
    if($roww=mysqli_fetch_array($re))
     {
      header("Location:http://localhost/library%20management/register.php?msg1=Account Exits!!!"); 
     }

    else
   {

  
    $fnam=$_POST['fname'];
    $lname=$_POST['lname'];
    //$id=$_POST['id'];
    $branch=$_POST['branch'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    //$pass = md5($pass);
    
    

    $sqll="insert into register values('$fnam','$lname','$id','$branch','$email','$pass')";
    $res=$conn->query($sqll);
    header("Location:http://localhost/library%20management/prog.php#h3");
   }
}
 else if((strlen($_POST['pass']))<8)
{
 header("Location:http://localhost/library%20management/register.php?msg=Enter Min 8 digit password!!!"); 
}
else if(($_POST['pass']) != ($_POST['confpass']))
{
 header("Location:http://localhost/library%20management/register.php?msg=Passwords Didn't Match!!!"); 
}
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
            background-image:url('lib2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            //overflow: hidden; 
        }
        h1{
           //background-color: rgba(240, 240, 240, 1);
            font-size:75px;
            text-align: center;
            padding-top: 10px;
padding-bottom: 10px;
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
        /*.butt1{
          
            float:right;
            font-size:20px;
            width:250px;
        }
        .butt2{
            float:left;
        }
        .butt1 a{
            text-decoration:none;
            color:white;
          //border: 1px solid black;
          	//width:300%;
           //margin: 20px;
           //padding-right: 70px;
           //padding-left: 100px;
          
        }
      .butt4{
      	padding: 8px 80px;
      	margin-left: 0;
      	padding-left: 90px; text-align: center;
      }*/
     
      #q{
      	padding: 8px 80px;
      	margin-left: 0;
      	padding-left: 40px;padding-right: 50px; text-align: center;
      }
      input .li:hover{
      	opacity:1;			
      }
	</style>
</head>

<body>
<h1 style="text-align:center;text-color:grey; background-color: rgba(255,255,255,0);
;margin-left: 80px;margin-right:80px;height: 140px; padding-top: 30px;padding-bottom:10px;font-size:75px;">NALANDA &nbsp;&nbsp;LIBRARY</h1>

<div id="h4" class="form form2">
                <form class="register-form" action="#" method="POST">            
                <div class="row">
                <?php if(!empty($_GET['msg1'])){
                      $bd1=$_GET['msg1']; echo '<h4 style="color:white">'.$bd1.'</h4>';
                      }
                ?>
              <div class="col-xs-6 aa"><input type="text" placeholder="FIRST NAME" name="fname" required /></div>
              <div class="col-xs-6 aa"><input type="text" placeholder="LAST NAME" name="lname" required/></div>
              </div>
                    <div class="aa"><input type="text" placeholder="ROLL NUMBER" name="id" maxlength="10" required/></div>
                    <div class="aa"><input type="text" placeholder="BRANCH" name="branch" required/></div>
                    <div class="aa"><input type="email" placeholder="EMAIL"  name="email" required/></div>
                <?php if(!empty($_GET['msg'])){
                        $bd2=$_GET['msg']; echo '<h4 style="color:white">'.$bd2.'</h4>';
                      }
                    ?>
                    
                    <div class="aa"><input type="password" placeholder="PASSWORD"  name="pass" required id="pass1"/></div>
                    <div class="aa"><input type="password" placeholder="CONFIRM PASSWORD"  name="confpass" required id="pass2"/></div>

                   
                   <input type="submit" value="CREATE" class="aa li" style="background-color: green;color: white;border: 1px solid black" name="reg" onSubmit="return func()">
                  <p class="message aa">Already Registered?&nbsp;&nbsp;<a href="prog.php#h3">Login</a></p>
                </form>
          </div><br><br> <br><br>
  </body>
</html>


          