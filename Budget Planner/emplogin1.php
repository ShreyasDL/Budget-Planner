<html>
    <head>
        <title>Employee Login</title>
<style>
    a{
        text-decoration: none;
        color: white;
    }
ul li{
list-style:none;
width:140px;
height:50px;
padding:10px;
text-align:center;
border-radius: 5px;
box-sizing:content-box;
}

li:hover{
background-color:gray;
}
    body{
        background-image: url("adding2.jpg");
    }

</style>
    </head>
<body>
    <h2><center>BUDGET PLANNER</center></h2>
    <?php
        session_start();
    $x=$_SESSION['var'];
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