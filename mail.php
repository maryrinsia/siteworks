<?php 
	$conn=mysqli_connect('localhost','u156007557_tutor1','irshad200','u156007557_tutor');
	$mname=$_POST['name'];
    $mail=$_POST['email'];
    $sub=$_POST['subject'];
	$message=$_POST['message'];
	$sql="insert into messages(name,mail,subject,message) values('$mname','$mail','$sub','$message')";
	$res=mysqli_query($conn,$sql);
	
	/*checking record is inserted or not*/
	$query = "SELECT * FROM messages WHERE mail='$mail'";
    $result=$conn->query($query);
    if ($result->num_rows>0)
    {
        echo "<p style='color:green;'>The message has been sent.</p>";
    }
    else
    {
        echo "<p style='color:red;'>Failed!!!</p>";
    }
?>