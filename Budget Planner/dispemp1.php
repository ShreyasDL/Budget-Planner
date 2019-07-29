<html>
    <head>
        <title>Employee Details</title>
        <link href="style5.css" type="text/css" rel="stylesheet" >
    </head>
    <body>

<?php
$user='root';
$password='';
$db='budgetplanner';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT * FROM `empdetails`";
$result=mysqli_query($connect,$query);
        ?>
        <h3>Employee details</h3>
      <table border="2">
      <thead>
        <tr>
          <th>EmpID</th>
          <th>EmpName</th>
          <th>Date Of Joining</th>
          <th>Address</th>
          <th>MailID</th>
          <th>Contact NO</th>
            <th>DeptID</th>
            <th>DesgID</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row= mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['EmpID']}</td>
              <td>{$row['EmpName']}</td>
              <td>{$row['DOJ']}</td>
              <td>{$row['Address']}</td>
              <td>{$row['MailID']}</td>
              <td>{$row['ContactNo']}</td> 
              <td>{$row['DepID']}</td>
              <td>{$row['DesgID']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
        <h3><a href=login.html>Home</a></h3>
    </body>
</html>
