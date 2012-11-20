<html>
<head><title>My 2nd Lab - My 1st php</title></head>
<body>

<?php
function paint ()
{
?>

<form action="test.php" method="POST">

<table>
<tr>
<td>  Name
<td><input type="text" name="na">
<tr>

<tr>
<td>  Surrname
<td><input type="text" name="srna">
<tr>

<tr>
<td>  Address
<td><input type="text" name="add">
<tr>

<tr>
<td>  Telephone
<td><input type="text" name="tel">
<tr>

<tr>
<td>  Sex
<td><input type="radio" name="sex" value="Male" /> Male<br/ >
	<input type="radio" name="sex" value="Female" /> Female
<tr>

<tr>
<td>  Hobby
<td><input type="checkbox" name="hobb1" value="Music" />Music<br />
	<input type="checkbox" name="hobb2" value="Dance" />Dance<br />
	<input type="checkbox" name="hobb3" value="Shopping" />Shopping<br />
	<input type="checkbox" name="hobb4" value="Travelling" />Travelling<br />
	<input type="checkbox" name="hobb5" value="Reading" />Reading<br />
	<input type="checkbox" name="hobb6" value="Photography" />Photography<br />

<tr>


<td colspan="2" align="center"><input type="submit" name="but" value="Press O.K.">
</table>
</form>
<?php
}

function proces ()
{
?>
<p>
Data entered:
<?php
echo "<br/>";
echo "<br/> Name: ";
echo $_POST['na'];
echo "<br/> Surrname: ";
echo $_POST['srna'];
echo "<br/> Address: ";
echo $_POST['add'];
echo "<br/> Telephone: ";
echo $_POST['tel'];
echo "<br/> Sex: ";
echo $_POST['sex'];
echo "<br/> Hobbies: ";
echo $_POST['hobb1'];
} 

// **************************************************
// main page here:

?>

HELLO
<?php
echo 'from php!';
?>
<br>
Please insert your personal information!
<br>
<?php 
if (!isset($_POST['but']))
	paint();
else 
	proces();
?>

</body>
</html>		