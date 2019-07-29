<html>
    <head>
        <title>Employee Bill Details</title>
        <link href="style5.css" type="text/css" rel="stylesheet">
    </head>
    <body>

<?php
        session_start();
$empid=$_SESSION['var'];
$x=$empid;
$_SESSION['var1']=$x;
$user='root';
$password='';
$db='budgetplanner';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT BilID,BillDesc,BillDate,BillAmt,DueAmt,DueDate,Status FROM `bills1` where EmpID='$empid'";
$result=mysqli_query($connect,$query);
        ?>
        <h3>Pending Bills</h3>
      <table border="2">
      <thead>
        <tr>
          <th>BillID</th>
          <th>BillDesc</th>
          <th>BillDate</th>
          <th>BillAmt</th>
          <th>DueAmt</th>
          <th>DueDate</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['BilID']}</td>
              <td>{$row['BillDesc']}</td>
              <td>{$row['BillDate']}</td>
              <td>{$row['BillAmt']}</td>
              <td>{$row['DueAmt']}</td>
              <td>{$row['DueDate']}</td> 
              <td>{$row['Status']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
        <pre><h3><a href=emplogin1.php>Home</a>        <a href=index.html>Logout</a></h3></pre>
    </body>
</html>
