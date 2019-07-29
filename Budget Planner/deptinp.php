<html>
    <head>
        <style>
            a{
                text-decoration: none;
            }
            h3{
                color: black;
                text-align: center;
                font-family: sans-serif,"Times New Roman";
            }
        </style>
    </head>
    <body>
        <?php

        $deptId = filter_input(INPUT_POST, 'depid');
        $deptname=filter_input(INPUT_POST, 'depname');
        require 'connect.php';
        $sql="INSERT INTO dept(Dept_ID,DeptName)VALUES('$deptId','$deptname')";
        $result=mysqli_query($db,$sql) or die("error:$sql");
        echo "Record added successfully";
?>
        <h3><a href="login.html">Home</a></h3>
    </body>
</html>