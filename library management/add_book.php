
<?php 
session_start();
$conn=mysqli_connect('localhost','root','','library');
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
h5{
           background-color: none; 
            font-size:70px;
            text-align: left;
            padding: 50px;
            color:black;
            //border: 2px solid white;
        }
	button{
		background-color: green;
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
.s1{
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
					  <li><a href="admin.php" style="text-decoration: none;" >Admin</a></li>
				      <li><a href="viewrequest.php" style="text-decoration: none;" >View Requests</a></li>
				      <li><a href="add_book.php" style="text-decoration: none;">Add Book</a></li>
				      <li><a href="curr_issued.php" style="text-decoration: none;">Currently Issued</a></li>
				      <li><a href="view_recommend.php" style="text-decoration: none;">View Recommended</a></li>
                                      <li><a href="changepassadmin.php" style="text-decoration: none;">Change Password</a></li>
				    </ul>
				</nav>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
                                                 <div class="panel-heading panel-heading-custom">Add a book to the library</div>
                                                    <div class="panel-body panel-body-custom">
						<div class="row">
							<div class="col-md-6" >
								<form action="#" method="POST">
									<h2>Enter The Details :</h2>
									
									<input type="text" name="bookid" placeholder="Enter Book ID" class="s1" >&nbsp;&nbsp;&nbsp;&nbsp;
									<br/><br/>	
									<input type="text" name="bookname" placeholder="Enter Book Name" class="s1">
										
									<br/><br/>	
									
									<input type="text" name="bookauthor" placeholder="Enter Author" class="s1">&nbsp;&nbsp;&nbsp;&nbsp;
									<br/><br/>	
									<input type="text" name="bookcopies" placeholder="No of copies" class="s1">
										
									<br/><br/>
									<input type="submit" name="addbook" value="ADD BOOK" class="btn btn-lg active sub1" style="position: static;left :0;">
								</form>	

						<?php

							if(isset($_POST['addbook']))
							{
								$v1=$_POST['bookid'];
								$v2=$_POST['bookname'];
								$v3=$_POST['bookauthor'];
								$v4=$_POST['bookcopies'];

								$s2="insert into books values('$v1','$v2','$v3','$v4')";
								$s3=$conn->query($s2);	
							}

						?>
								
							</div>

						</div>
				</div>
</div>
			</div>
							<div class="col-md-2 sticky">
			 					<a href="prog.php" class="btn btn-lg active butt1" role="button" aria-pressed="true">LOG OUT</a>
			 				</div>

		</div>
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