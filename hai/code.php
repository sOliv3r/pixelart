
<html>
<head>

  <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery.lightbox-0.5.css" media="screen" />
   <script type="text/javascript">
    $(function() {
        $('.gallery').lightBox();
    });
    </script>  




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Welcome to PixelArt!</title>

</head>

<body>
<div id="title-header">
<p><center>Welcome to PixelArt!</p>
</div>

<div id="main">
<p><center><a href="http://localhost:8080/start/hai/upload.form.php">Upload picture!</a></p>
<p><center>Here you can <b>upload</b> or <b>browse</b> through pictures and you can even <b>favorite</b> the ones you like!</p>
<?php

$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("devart", $con);

$i=0;

$result = mysql_query("SELECT image_name FROM image");
?>

<table border=0 cellspacing=20 cellpadding=10><tr>
<?php 
while ($row = mysql_fetch_assoc($result)) {
	if($i%5==0){

?>
  </tr><tr>

<?php
$i=0;
  }

  ?>
<td><div class="pic-frame"><a href="http://localhost:8080/start/hai/uploaded_files/<?php echo $row[image_name]; ?>" class="gallery" ><img src='uploaded_files/<?php echo $row[image_name]; ?>' width='150' height='150'/></a></div></td>
    <?php

  $i++;
 
  }
?>
</table>




<?php
mysql_close($con);

?>

</div>
</body>
</html>