<html>
    <head>
        <style>
            h3{
                color:black;
                text-align: center;
                font-family: sans-serif,"Timew New Roman";
            }
            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php
$desid=filter_input(INPUT_POST, 'desgid');
 $desname= filter_input(INPUT_POST, 'desgname');

require 'connect.php';
$sql="Insert into desg(DesgID,DesgName)values('$desid','$desname')";
$result=mysqli_query($db,$sql) or die("error:$sql");
echo"New record inserted successfully";
?>
        <h3><a href="login.html">Home</a></h3>
    </body>
</html>