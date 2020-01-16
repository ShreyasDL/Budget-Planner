<?php
	$username = $_POST['user'];           //extract username from front end
	$password  = $_POST['pass'];          //extract password from front end
	if ($username&&$password)
	{
	     $connect = mysqli_connect("localhost","root","","budgetplanner") or die("Couldn't Connect");
	//mysql_select_db("myqb") or die("Cant find DB");    //  command use for connectivity
	    $query=mysqli_query($connect,"SELECT* FROM admin1 WHERE username='$username'");
	    $numrows = mysqli_num_rows($query);
	    if ($numrows!=0)
	    {
	       while($row = mysqli_fetch_assoc($query))
	       {
	            $dbusername = $row['username'];    // comparing values from database
	            $dbpassword = $row['password'];
	       }
        }
      if ($username==$dbusername&& $password==$dbpassword)
      {
           echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto<a href='index.html'> Here </a></center>";
           echo "<meta http-equiv='refresh' content ='2; url=login.html'>";
           $_SESSION['username'] = $username;
      } 
        else{
            echo"Invalid Username or Password";
        }
    }
?>