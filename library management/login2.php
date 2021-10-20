<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



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
            header {
                font-size: large;
               padding: 0em;
               margin:  0em;
                background: #000000;
            }
.sideNavBox {
  width: 250px;
  position: fixed;
  left: 0;
  background-color: #545555;
}

div{
  display:block;
}
 h1{
           background-color: rgba(255,255,255,0.6); 
            font-size:70px;
            text-align: center;
            padding: 30px;
            color:black;
            //border: 2px solid white;
        }
 h5{
           background-color: none; 
            font-size:70px;
            text-align: left;
            padding: 50px;
            color:black;
            //border: 2px solid white;
        }
	button{
		background-color: red;
	}
	.xd{
            font-family: verdana;
            font-size: 25px;
            /*padding-bottom: 75px;
            padding-top: 75px;
*/            line-height: 70px;
        }
        div.sticky{
            
            position: sticky;
            top: 0px;
        }
        .butt1{
            background-color: grey;
            border: 1px solid black;
            color:white;
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
        	color:black;
        }
        .butt4:hover{
        	color:white;
        }
         nav ul li:nth-child(6) a::after{
            background-color: #8c8c8c;
         }

         nav ul li:nth-child(7) a::after{
            background-color: #8c8c8c;
         }

     
</style>
</head>
<body>

<h1 style="text-align:center;text-color:grey; background-color: rgba(255,255,255,0.6);
;margin-left: 40px;margin-right:40px;height: 140px; padding-top: 30px;padding-bottom:30px;font-size:60px;border: 2px solid black;border: double;">NALANDA &nbsp;&nbsp;LIBRARY</h1><br><br/>
<br><br/>

		<div class="row-md-4 row-xs-4">
			<div class="col-md-4">
				<nav>
					<ul>
				      <li><a href="login2.php"         style="text-decoration: none;">Your Details</a></li>
				      <li><a href="search.php"         style="text-decoration: none;">View / Search Books</a></li>
				      <li><a href="issued.php"         style="text-decoration: none;">Issued Books</a></li>
				      <li><a href="recommand.php"      style="text-decoration: none;">Recommend Book</a></li>
				      <li><a href="viewresponses.php"  style="text-decoration: none;">View Responses</a></li>
                                      <li><a href="changepassword.php" style="text-decoration: none;">Change Password</a></li>
				    </ul>
				</nav>
			</div>

                 <div class="col-md-6 col-xs-6">
						<div class="panel panel-default">
                                                 <div class="panel-heading panel-heading-custom">Details</div>
                                                    <div class="panel-body panel-body-custom">
							<div class="col-md-9">
								 
								<span class="xd">EMAIL &nbsp;&nbsp;&nbsp;  :  <?php
									echo $_SESSION['email']; ?>
								</span><br/>
								<span class="xd">NAME &nbsp;&nbsp;&nbsp;  :  <?php
									echo $_SESSION['fn']." ".$_SESSION['ln']; ?>
								</span><br/>
								<span class="xd">ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :  <?php
									echo $_SESSION['Id']; ?>
								</span><br/>
								<span class="xd">BRANCH   :  <?php
									echo $_SESSION['br']; ?>
								</span><br/><br/><br/><br/><br/>
								
							</div>
</div>

						
		</div>	

</div>
			<div class="col-md-2 sticky">
			 <a href="prog.php" class="btn btn-lg active butt1" role="button" aria-pressed="true">LOG OUT</a>
		</div>	
</div>

	<div class="row">
			<div class="col-md-12"><br/><br/><br/><br/>
				<footer>
					<h1 class="lol"> copyright &copy;, belongs to Nalanda NITC Library </h1>
				</footer>
			</div>
		</div>
	</div>
</body>

</html>