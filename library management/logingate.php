<?php
session_start();
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
//$pass = md5($pass);
//echo $email;
///////////////////

		$conn=new mysqli('localhost','root','','library');

		$sql="select * from register where email='$email' and password='$pass'";
		$res=$conn->query($sql);
                $sql2="select * from admin where email='$email' and password='$pass'";
		$res2=$conn->query($sql2);
		
		
	/*	$r1=$res->fetch_array();
		echo $email."   ".$pass."<br/>";
		$_SESSION['fn']=$r1['fname'];
		$_SESSION['ln']=$r1['lname'];
		$_SESSION['Id']=$r1['id'];
		$_SESSION['br']=$r1['branch'];  */
		$vv=0;
		if($r2=mysqli_fetch_array($res2))
		{

			//echo "dfgdg";
			$vv=1;
			 header("Location:http://localhost/library%20management/admin.php");
		}
		
		

		while ($r1=mysqli_fetch_array($res)) {
		$_SESSION['fn']=$r1['fname'];
		$_SESSION['ln']=$r1['lname'];
		$_SESSION['Id']=$r1['Id'];
		$_SESSION['br']=$r1['Branch'];
		
			header("Location:http://localhost/library%20management/login2.php");	
			$vv=$vv+1;
		}
				if($vv==0) 
					{
						header("Location:http://localhost/library%20management/prog.php?message=Invalid Username / Password");
					}
?>
		
