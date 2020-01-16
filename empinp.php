<html>
    <head>
        <style>
            h3{
                color:black;
                text-align: center;
                font-family:sans-serif,"Times New Roman";
            }
            a{
                text-decoration: none;
            }
        </style>
    </head>
<body><?php
    $empid = filter_input(INPUT_POST, 'EmpId');
    $empname = filter_input(INPUT_POST, 'name');
    $doj=filter_input(INPUT_POST, 'date');
    $add=filter_input(INPUT_POST, 'address');
    $mail=filter_input(INPUT_POST, 'mailId');
    $cont=filter_input(INPUT_POST, 'no');
    $deptId=filter_input(INPUT_POST, 'dept');
    $desgId=filter_input(INPUT_POST,'desg');
    if(!empty($empid))
    {
        $host = "localhost"; 
        $dbusername = "root"; $dbpassword = ""; $dbname = "budgetplanner"; 
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname); 
        if (mysqli_connect_error())
        {
            die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error()); 
        }    
        else
        {   
            $sql = "INSERT INTO empdetails (EmpID,EmpName,DOJ,Address,MailID,ContactNo,DepID,DesgID) VALUES('$empid','$empname','$doj','$add','$mail','$cont','$deptId','$desgId')"; 
            if ($conn->query($sql))
            {
                echo "New record is inserted successfully"; 
            } 
            else
            {
                echo "Error: ". $sql ." ". $conn->error; 
            } 
            $conn->close(); 
        }
    }else{
        echo "Username should not be empty"; die();
    }
?>
    <h3><a href="login.html">Home</a></h3>
</body>
</html>