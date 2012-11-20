
<html>
<?php

$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("devart", $con);

$i=0;
$result = mysql_query("SELECT image_name FROM image");
echo "<table border=0 cellspacing=10 cellpading=1><tr>";
while ($row = mysql_fetch_assoc($result)) {
	$i++;
	if($i<=3)
	{
	
 echo "<td><div><a href='http://localhost:8080/start/hai/uploaded_files/$row[image_name]'><img src='uploaded_files/$row[image_name]' width='150' height='150'/></a></div></td>";
  }
  else 
  {
  echo "<tr><td><img src='$row[image_name]' width='150' height='150'/></td><tr>";
  $i=0;
  }
}
echo "</tr></table>";





mysql_close($con);

?>

</html>