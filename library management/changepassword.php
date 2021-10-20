<?php 
session_start();
?>
	
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="new.css">
<style type="text/css">
         	body{
            background-image: url('lib2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;  
            //overflow: hidden; 
        }
 h1{
            background-color: rgba(255,255,255,0.6);
            font-size:50px;
            text-align: center;
            padding: 30px;
            color:black;
            //border: 2px solid white;
        }
	button{
		background-color: green;
	}
	.s1{
    
    }
	.xd{
            font-family: verdana;
            font-size: 20px;
            //padding-bottom: 5px;
            //padding-top: 5px;
            /*line-height: 20px;*/
        }
        div.sticky{
            
            position: sticky;
            top: 0px;
        }
        .butt1{
            background-color: grey;
            border: 1px solid black;
            color: white;
            padding:10px;
            float:right;
            font-size:20px;
            width:130px;
        }
                     .butt1:hover{
        	color:black; 
                background-color: white;   
        }
        .butt4{
        	color:white;
        }
        .butt4:hover{
        	color:white;
        }
        .t1,tr,th,td{
        	border:1px solid black;
        }
        th,td{
        	text-align: center;
        	padding:10px;
        }


         nav ul li:nth-child(6) a::after{
            background-color: #8c8c8c;
         }
 
         nav ul li:nth-child(7) a::after{
            background-color: #8c8c8c;
         }
input[type=text]{
	padding:14px;
	width:230px;
	/*text-align: center;*/
	/*margin-left:165px;*/
	border-radius: 4px;
	border:1px solid /*rgba(220,220,220,0.4)*/grey;
	/*padding: 10px;*/
}
.sub1{position:relative; left:220px;background-color: #363636;
            border: 1px solid black;
            color: white;
            padding:10px;
            font-size:15px;}
.sub1:hover{border:1px solid black;color:black; 
                background-color: white;}
</style>
</head>
<body>
<h1 style="text-align:center;text-color:black; background-color: rgba(255,255,255,0.6);
;margin-left: 10px;margin-right:10px;height: 140px; padding-top: 30px;padding-bottom:30px;font-size:60px;border: 2px solid black;border: double;">NALANDA &nbsp;&nbsp;LIBRARY</h1><br><br/>
		<div class="row-md-10 row-xs-10">
			<div class="col-md-4">
				<nav>
					<ul>
				      <li><a href="login2.php" style="text-decoration: none;" >Your Details</a></li>
				      <li><a href="search.php" style="text-decoration: none;">View / Search Books</a></li>
				      <li><a href="issued.php" style="text-decoration: none;">Issued Books</a></li>
				      <li><a href="recommand.php" style="text-decoration: none;">recommend Book</a></li>
				      
				       <li><a href="viewresponses.php" style="text-decoration: none;">View Responses</a></li>
                                       <li><a href="changepassword.php" style="text-decoration: none;">Change Password</a></li>
				    </ul>
				</nav>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
                                                 <div class="panel-heading panel-heading-custom">Fill in the details</div>
                                                    <div class="panel-body panel-body-custom">
						<form action="#" method="POST">
                                                        
                                                      
                                                        <input type="text" name="Id" placeholder="Enter Id" class="s2"><br/><br/><br/>
                                                        <input type="text" name="cpass" placeholder="Password" class="s2"><br/><br/><br/>
							<input type="text" name="npass" placeholder="New Password" class="s2"><br/><br/><br/>
							<input type="text" name="cnpass" placeholder=" Confirm Password" class="s2"><br/><br/>
                                                       <input type="submit" name="chngpass" value="SUBMIT" class="btn btn-lg active sub1" style="position: static;left :0;">

						</form>	
					
						<?php
if(isset($_POST['chngpass']))
{

$Id = $_POST["Id"];/* userid of the user */
$con = mysqli_connect('localhost','root','','library');
$result = mysqli_query($con,"SELECT *from register WHERE Id='" . $Id . "'");
$row=mysqli_fetch_array($result);
$id1=$row["Id"];
if($_POST["cpass"] == $row["password"] && $_POST["npass"] == $_POST["cnpass"] )
{
mysqli_query($con,"UPDATE register set password='" . $_POST["npass"] . "' WHERE Id='" . $Id . "'");
$message = "Password Changed Sucessfully";
   echo "<h2>" . $message . "</h2>";
} 
else if($_POST["npass"] != $_POST["cnpass"])
{ 
 $message = "New and Confirm Passwords doesn't match!!!";
echo "<h3>" . $message . "</h3>";
}
else if($Id != $id1)
{ 
 $message = "Please Enter Correct Id!!!";
echo "<h2>" . $message . "</h2>";
}
else
{
 $message = "Incorrect Old Password";
echo "<h2>" . $message . "</h2>";
}
}
?>		
							

		</div>			
						
		</div>
			</div>
			<div class="col-md-2 sticky">
			 <a href="prog.php" class="btn btn-lg active butt1" role="button" aria-pressed="true">LOG OUT</a>
		</div><br><br>
		<div class="row">
			<div class="col-md-12">
				<footer>
					<h1 class="lol"> copyright &copy;, belongs to Nalanda NITC Library </h1>
				</footer>
			</div>
		</div>
	</div>
</body>

</html>