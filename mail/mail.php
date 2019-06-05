<?php
$host = '****';
$user ="****";
$pass= "****";
$name="****";
$a = $_POST["PAS"];
$b = $_POST["USR"];
$password = md5($a);
$username = md5($b);
$connect = mysqli_connect($host,$user,$pass,$name);
$sql = "SELECT "+$username+" FROM pass";
$result = mysqli_query($connect,$sql);
if($result == $password){
    echo("GREAT");
}else{
    echo("YOUFACK");
}
#正在修改中 STILL NOT　WORK
?>
