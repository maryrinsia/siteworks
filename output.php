<?php 
$conn=mysqli_connect('localhost','u156007557_tutor1','irshad200','u156007557_tutor');
$sql="select * from student";
$res=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>OUTPUT</title>
</head>
<body>
	<table border="1" align='center'>
		<tr>
			<th>name</th>
			<th>class</th>
			<th>school</th>
			<th>syllabus</th>
			<th>timing</th>
			<th>subjects</th>
			<th>father_name</th>
			<th>ph_number</th>
			<th>email</th>
			<th>address</th>
		</tr>

		<?php while($data=mysqli_fetch_assoc($res)){?>
			<tr>
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
			</tr>
		<?php } ?>
	</table>
</body>
</html>