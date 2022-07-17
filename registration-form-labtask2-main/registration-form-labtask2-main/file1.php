<?php
$isPost=false;
$userid="";
$pass="";
$gen="";
$subject="";
$dept="";
$addr="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uid"]!="")
		$userid=$_POST["uid"];
	if($_POST["pass"]!="")
		$pass=$_POST["pass"];
	if($_POST["dept"]!="")
		$dept=$_POST["dept"];
	if($_POST["address"]!="")
		$addr=$_POST["address"];

}
?>

<form action="file2.php" method="post">
userid:<input type="text" id="uid" name="uid">
<?php
if($isPost==true && $userid=="")
 echo "<span style='color:green;'>Required</span>";
?>
<br><br>
Pass:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $pass=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $gen=="")
 echo "<span style='color:blue;'>Required</span>";
?>
<br><br>
Favorite Subject:<input type="checkbox" name="subject[]" value="BUSSINESS">BUSSINESS
<input type="checkbox" name="subject[]" value="MATH">MATH
<input type="checkbox" name="subject[]" value="ENGLISH">ENGLISH
<input type="checkbox" name="subject[]" value="SCIENCE">SCIENCE
<?php
if($isPost==true && $subject=="")
 echo "<span style='color:green;'>Required</span>";
?>

<br><br>

Department:<select name="dept">
<option value="Option">Choose Any Option</option>
<option value="FST">FST</option>
<option value="FBA">FBA</option>
<option value="FASS">FASS</option>

</select>
<?php
if($isPost==true && $dept=="")
 echo "<span style='color:green;'>Required</span>";
?><br><br>
Address:<textarea name="address" rowspan="4" colspan="40"></textarea>
<?php
if($isPost==true && $addr=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>

<input type="submit" value="Click" name="btnClick">
</form>