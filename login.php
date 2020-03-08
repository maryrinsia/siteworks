<?php
$conn=mysqli_connect('localhost','u156007557_tutor1','irshad200','u156007557_tutor');
if($conn->connect_errno)
{
    die("Connection Error!!!");
}

$user = $_POST['uname'];
$pass = $_POST['psw'];

$query = "SELECT * FROM student WHERE username='$user' and password='$pass'";
$result=$conn->query($query);

$query2 = "SELECT * FROM admin WHERE username='$user' and password='$pass'";
$result2 = $conn->query($query2);

if ($result->num_rows>0)
{
    header("location: student.php");
}
else if($result2->num_rows>0)
{
    header("location: admin.html");
}
else
{ ?>

<script>
    alert("Invalid details");
    window.location.href="http://tutoracademy.in/home.html";
</script>
	
<?
};
?>