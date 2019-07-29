<html>
    <head>
        <title>Paid Bill Details</title>
        <link href="style5.css" type="text/css" rel="stylesheet" >
    </head>
    <body>

<?php
$user='root';
$password='';
$db='budgetplanner';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT * FROM `paydetails`";
$result=mysqli_query($connect,$query);
        ?>
        <h3>Paid Bill Details</h3>
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
        <h3><a href=login.html>Home</a></h3>
    </body>
</html>
