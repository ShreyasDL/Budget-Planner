<html>
    <head>
        <title>Department details</title>
        <link href="style5.css" type="text/css" rel="stylesheet" >
    </head>
    <body>

<?php
$user='root';
$password='';
$db='budgetplanner';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT * FROM `dept`";
$result=mysqli_query($connect,$query);
        ?>
        <h3>Department Details</h3>
      <table border="2">
      <thead>
        <tr>
          <th>DeptID</th>
          <th>DeptName</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['Dept_ID']}</td>
              <td>{$row['DeptName']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
        <h3><a href=login.html>Home</a></h3>
    </body>
</html>
