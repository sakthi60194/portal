<?php
		$servername="localhost";
		$username="root";
		$password="mysql";
		$dbname="portal";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

		if(!$conn)
		{
			die("Failed");
		}
		$email=$_POST["Email"];
		$password=$_POST["Password"];

		
		$sql="select * from user where email='".$email."' and password='".$password."'";
		
		$results=mysqli_query($conn,$sql);

		//echo "Success11";
		if(mysqli_num_rows($results) > 0)
		{
			echo "Success";
			while($row=mysqli_fetch_assoc($results))
			{
					$_SESSION["email"]=$row['email'];
					$_SESSION["name"]=$row['name'];
					header('Location: home.php');   
			}
		}
		else
		{
			
		}
?>