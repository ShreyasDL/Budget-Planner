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
    $billid = filter_input(INPUT_POST, 'billid');
    $empid=filter_input(INPUT_POST, 'empid');
    $billdesc=filter_input(INPUT_POST, 'billdesc');
    $billdate=filter_input(INPUT_POST, 'billdate');
    $billamt=filter_input(INPUT_POST, 'billamt');
    $dueamt=filter_input(INPUT_POST, 'dueamt');
    $duedate=filter_input(INPUT_POST, 'duedate');
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
            $sql = "INSERT INTO bills1(BilID,EmpID,BillDesc,BillDate,BillAmt,DueAmt,DueDate,Status) VALUES('$billid','$empid','$billdesc','$billdate','$billamt','$dueamt','$duedate','PENDING')";
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
        echo "BillID should not be empty"; die();
    }
?>
        <h3><a href="login.html">Home</a></h3>
    </body>
</html>
     