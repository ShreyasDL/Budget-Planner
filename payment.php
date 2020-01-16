<html>
    <head>
        <title>Employee payments</title>
        <link href="style5.css" type="text/css" rel="stylesheet" >
    </head>
    <body>

<?php
        session_start();
$empid=$_SESSION['var1'];
$user='root';
$password='';
$db='budgetplanner';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT PayID,BillID,Amount,PayDate,PayMode,BankName FROM `paydetails` where BillID IN(Select BilID from `bills1` where EmpID='$empid')";
$result=mysqli_query($connect,$query);
        ?>
        <h3>Payment History</h3>
      <table border="2">
      <thead>
        <tr>
          <th>PayID</th>
          <th>BillID</th>
          <th>Amount</th>
          <th>PayDate</th>
          <th>PayMode</th>
          <th>BankName</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['PayID']}</td>
              <td>{$row['BillID']}</td>
              <td>{$row['Amount']}</td>
              <td>{$row['PayDate']}</td>
              <td>{$row['PayMode']}</td>
              <td>{$row['BankName']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
        <pre><h3><a href=emplogin1.php>Home</a>      <a href=index.html>Logout</a></h3></pre>
    </body>
</html>
