<html>
<head> 
<title> form </title>
</head>
<body>
<?php 
$a=$_POST["name"];
$b=$_POST["number"];
$c=$_POST["email"];
$d=$_POST["department"];
$e=$_POST["year"];
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["resume"]["name"]);
$uploadok=1;
move_uploaded_file($_FILES["resume"]["tmp_name"],"$target_file");
$dbc=mysqli_connect('localhost','root','shara1234','DATA')
or die('error connecting to the server');
$query="INSERT INTO FORM (NAME,NUMBER,EMAIL,DEPARTMENT,YEAR,RESUME) VALUES('$a','$b','$c','$d','$e','$target_file')";
$result=mysqli_query($dbc,$query);
mysqli_close($dbc);
echo 'form submitted';
?>
</body>
</html>