<html>
<head> </head>
<body>
<p>Connection:</p>
<?php
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("new_schema", $con);

$result = mysql_query("SELECT * FROM pictureid");

while($row = mysql_fetch_array($result))
  {
  echo $row['pictureID'] . " " . $row['pictureTitleID'];
  echo "<br />";
  }
 $result1 = mysql_query("SELECT * FROM picture_title");
while($row = mysql_fetch_array($result1))
  {
  echo $row['titleID'] . " " . $row['pictureTitle'];
  echo "<br />";
  }
mysql_close($con);
?>
</body>
</html>
