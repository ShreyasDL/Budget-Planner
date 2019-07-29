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
    $payid = filter_input(INPUT_POST, 'payid');
    $billid=filter_input(INPUT_POST, 'billid');
    $amt=filter_input(INPUT_POST,'amt');
    $paydate=filter_input(INPUT_POST, 'paydate');
    $paymode=filter_input(INPUT_POST, 'paymode');
    $bankName=filter_input(INPUT_POST, 'bankname');
    if(!empty($payid))
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
            $query=mysqli_query($conn,"Select DueAmt from `bills1` WHERE BilID='$billid'");
            $dueamt=mysqli_fetch_array($query);
            $rem=$dueamt[0]-$amt;
            if($rem==0){
                mysqli_query($conn,"UPDATE `bills1` SET DueAmt=$rem,Status='CLEARED'  WHERE BilId='$billid'");
            }else{
                mysqli_query($conn,"UPDATE `bills1` SET DueAmt=$rem WHERE BilId='$billid'");
            }
            $sql = "INSERT INTO paydetails(PayID,BillID,Amount,PayDate,PayMode,BankName) VALUES('$payid','$billid','$amt','$paydate','$paymode','$bankName')";
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
        echo "PayID should not be empty"; die();
    }
?>
        <h3><a href="login.html">Home</a></h3>
    </body>
</html>
     