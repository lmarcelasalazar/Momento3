<?php 

$user=$_POST['username'];
$pass=$_POST['password'];

$conn=mysqli_connect("localhost","root","","bdgimnasio");
$cons="SELECT * FROM users WEHRE username='$user' and password='$pass'";
$res=mysqli_query($conn,$cons);

$files=mysqli_num_rows($res);

if ($files>0) {
    header("location:account.html");
} else {
    echo("Error");
}

mysqli_free_result($res);
mysqli_close($conn);


?>