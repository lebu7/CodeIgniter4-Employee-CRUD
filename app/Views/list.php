<html>
<head>
	<title>Employee CRUD</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <style type="text/css">
	  	a:link, a:visited {
          color: white;
          text-align: center;
          text-decoration: none;
          display: inline-block;
         }
	  </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Employee List</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url('employee') ?>">Home</a></li>

    </ul>
  </div>
</nav>
<div class="container">
<div class="jumbotron">
  <table class="table table-striped" align="center">
    <tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Residence</th>
		<th>Employee ID</th>
		<th>Email</th>
		<th>Telephone</th>
		<th>Action</th>
	</tr>
	<?php
	 foreach($employees_detail as $sd){
		?>
		<tr>
			<td><?php echo $sd['first_name']; ?></td>
			<td><?php echo $sd['last_name']; ?></td>
			<td><?php echo $sd['residence']; ?></td>
			<td><?php echo $sd['employee_id']; ?></td>
			<td><?php echo $sd['email']; ?></td>
			<td><?php echo $sd['telephone']; ?></td>
			<td>
				<button type="button" class="btn btn-primary"><a  href="<?php echo base_url(); ?>/employee/edit/<?php echo $sd['id']; ?>">Edit</a></buton> &nbsp;
				<button type="button" class="btn btn-danger"><a  href="<?php echo base_url(); ?>/employee/delete/<?php echo $sd['id']; ?>">Delete</a></button>
			</td>
		</tr>

		<?php
	}
	?>

 </table>
</div>
       <button type="button" class="btn btn-success" ><a href="<?php echo site_url('employee/create') ?>">Add Details</a></button>
   </div>
</body>
</html> 