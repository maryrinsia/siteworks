<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <title>Admin Dashboard | Student List</title>
    <style>
    </style>
</head>
<body>
    <div class="col-lg-2 sidenav">
        <div class="container">
            <a href="index.html"><img src="img/tutortitle-removebg-preview.png" width="100%" height="100%" class="roundborder"></a><br><br>
            <a href="admin.html"><button>HOME</button></a><br>
            <button>ATTENDANCE</button><br>
            <button>STUDENTS LIST</button><br>
            <button>TEACHERS LIST</button><br>
            <button>FEE PAYMENT</button><br>
            <button>PAID LIST</button><br>
            <a href="message.php"><button>MESSAGES</button></a><br>
        </div>  
    </div>
    <div class="col-lg-10 content">
        <div class="row header">
            <div class="col-lg-4 head">
                <h1>&emsp;Admin Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div>
            <?php 
            $conn=mysqli_connect('localhost','u156007557_tutor1','irshad200','u156007557_tutor');
            $sql="select * from stud";
            $res=mysqli_query($conn,$sql);
            ?>

        	<table border="1" align='center'>
        		<tr>
        		    <th>No.</th>
        			<th>Name</th>
        			<th>Class</th>
        			<th>School</th>
        			<th>Syllabus</th>
        			<th>Timing</th>
        			<th>Subjects</th>
        			<th>Father_name</th>
        			<th>Ph_number</th>
        			<th>Email</th>
        			<th>Address</th>
        			<th>Joining Date</th>
        		</tr>
        
        		<?php while($data=mysqli_fetch_assoc($res)){?>
        			<tr>
        			    <td><?php echo $data['id'] ?></td>
        				<td><?php echo $data['name'] ?></td>
        				<td><?php echo $data['class'] ?></td>
        				<td><?php echo $data['school'] ?></td>
        				<td><?php echo $data['syllabus'] ?></td>
        				<td><?php echo $data['timing'] ?></td>
        				<td><?php echo $data['subjects'] ?></td>
        				<td><?php echo $data['father_name'] ?></td>
        				<td><?php echo $data['ph_number'] ?></td>
        				<td><?php echo $data['email'] ?></td>
        				<td><?php echo $data['address'] ?></td>
        				<td><?php echo $data['date']?></td>
        			</tr>
        		<?php } ?>
        	</table>
            </div>
        </div>
    </div>
</body>
</html>