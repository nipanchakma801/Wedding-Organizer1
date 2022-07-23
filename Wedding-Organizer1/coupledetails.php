<html>
<head></head>
<body>
<?php
header("Refresh:2; url=home.html");

$servername= "localhost";
$username="root";
$password ="";
$con = mysqli_connect($servername,$username,$password,);
if(!$con) {
die("connection failed :" . mysqli_connect_error());
} 
else{
echo ("connected successfully"); 
}
echo "<br />";
/*
$sql1 = "CREATE DATABASE wedding_organizer_db";
if(mysqli_query($con,$sql1)){
echo "database created successfully";
}
else
{
echo "error creating database:".mysqli_error($con);
}
*/
mysqli_select_db($con , "wedding_organizer_db"); 
/*
$sql2 ="CREATE TABLE couple_details_tbl(
Id int(11),
UserName varchar(100),
GroomName varchar(100),
BrideName varchar(100),
WeddingDate date,
HomeComingDate date,
Email varchar(100),
Password varchar(20),
Mobile varchar(20),
City varchar(50))";
if (mysqli_query ($con, $sql2 )){
echo "Table couple_details_tbl created successfully";
}
else{
echo "Error creating table: ". mysqli_error ($con);
} 
*/
$sql3="INSERT INTO couple_details_tbl (UserName, GroomName, BrideName, WeddingDate, HomeComingDate, Email, Password, Mobile, City) VALUES
('$_POST[uname]','$_POST[gname]','$_POST[bname]','$_POST[wdate]','$_POST[hcdate]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[city]')";
if (!mysqli_query($con, $sql3))
{
die('Error: ' . mysqli_error($con));
}
else{
echo "New record created successfully";
}
mysqli_close($con);
*/

?>
</body>
</html>