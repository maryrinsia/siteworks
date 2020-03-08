<?php 
	$conn=mysqli_connect('localhost','u156007557_tutor1','irshad200','u156007557_tutor');
	$sname=$_POST['sname'];
	$class=$_POST['class'];
	$school=$_POST['school'];
	$syllabus=$_POST['syllabus'];
	if($class=="8" || $class=="9")
	{
	    $time="5-7";
	}
	else if($class=="10")
	{
	    $time="5.30-7";
	}
	else if($class=="+1Sci" || $class=="+1Com" || $class=="+2Sci" || $class=="+2Com")
	{
	    $time="6.30-8";
	}
	else{
	    alert("Choose class!!!");
	}
	$sub=implode(' , ', $_POST['sub']);
	$father=$_POST['father'];
	$phone=$_POST['phone'];
	$phone2=$_POST['phone1'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$username="tu20";
	$password="tutor@123";
	
	//echo $sname,$class,$school,$syllabus,$time,$sub,$father,$phone,$phone2,$email,$address,$username,$password;
	
	$sql="insert into stud(name,class,school,syllabus,timing,subjects,father_name,ph_number,ph_number2,email,address,username,password) values('$sname','$class','$school','$syllabus','$time','$sub','$father','$phone','$phone2','$email','$address','$username','$password')";
	$res=mysqli_query($conn,$sql);
	
	
	//checking record is inserted or not
	$query = "SELECT * FROM stud WHERE name='$sname'";
    $result=$conn->query($query);
    if ($result->num_rows>0)
    {
        echo "<script>alert('Registration Success...'); window.location.href='http://tutoracademy.in/';</script>";
    }
    else
    {
        echo "<script>alert('Registration Failed...'); window.location.href='http://tutoracademy.in/';</script>";
    } 
	
	
?>