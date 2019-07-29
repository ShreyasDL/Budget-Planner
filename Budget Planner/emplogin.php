<html>
    <head>
     <title>Employee</title>
        <link href="style7.css" type="text/css" rel="stylesheet" >
    </head>
<body>
    <h2><center>BUDGET PLANNER</center></h2>
    <?php
        session_start();
       $x=filter_input(INPUT_POST,'empname');
    $_SESSION['var']=$x;
    ?>
<ul>
    <li><p><a href="empbills.php">Pending Bills</a></p></li>
    <li><p><a href="payment.php">Payment History</a></p></li>
    <li><p><a href ="index.html" >Logout</a></p></li>
</ul>
    <p><center>Successfully Logged in</center></p>
</body>
</html>