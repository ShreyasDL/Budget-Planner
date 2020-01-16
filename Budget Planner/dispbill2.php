<html>
    <head>
    <title>Bill Details</title>
        <link href="style5.css" type="text/css" rel="stylesheet" >
    </head>
    <body>

<?php
$user='root';
$password='';
$db='budgetplanner';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT * FROM `bills1`";
$result=mysqli_query($connect,$query);
        ?>
        <h3>Bill Details</h3>
      <table border="2">
      <thead>
        <tr>
          <th>BillID</th>
          <th>EmpID</th>
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
              <td>{$row['EmpID']}</td>
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
        <h3><a href=login.html>Home</a></h3>
    </body>
</html>
