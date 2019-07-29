<html>
    <head>
        <title>Desgnation Details</title>
        <link href="style5.css" type="text/css" rel="stylesheet" >
    </head>
    <body>

<?php
$user='root';
$password='';
$db='budgetplanner';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT * FROM `desg`";
$result=mysqli_query($connect,$query);
        ?>
        <h3>Desgnation Details</h3>
      <table border="2">
      <thead>
        <tr>
          <th>DesgID</th>
          <th>DesgName</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['DesgID']}</td>
              <td>{$row['DesgName']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
        <h3><a href=login.html>Home</a></h3>
    </body>
</html>
