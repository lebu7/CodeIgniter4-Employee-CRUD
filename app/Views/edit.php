<!DOCTYPE html>
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
         h2{
            color: #000000;
            text-transform: uppercase;
            font-weight: bolder;
         }
      </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Edit Record</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url('employee') ?>">Home</a></li>

    </ul>
  </div>
</nav>

<div class="container">
<div class="jumbotron">
  <form method="post" name="frmEdit" action="<?php echo base_url('employee/update');?>">
	<table class="table" align="center">
		<tr>
			<label colspan="2" align="center"><h2>Edit Record</h2></label>
		</tr>
		<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $employee['id'] ?>">
		<tr>
			<th>First Name</th>
			<td><input type="text" name="txtFname" placeholder="First name" value="<?php echo $employee['first_name']; ?>"> </td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" name="txtLname" placeholder="Surname" value="<?php echo $employee['last_name']; ?>"> </td>
		</tr>
		<tr>
			<th>Residence</th>
			<td><textarea name="txtResidence" rows="3" cols="20" placeholder="Employee home address..." value="<?php echo $employee['residence']; ?>"> </textarea> </td>
		</tr>
		<tr>
			<th>Employee ID</th>
			<td><input type="number" name="txtEid" placeholder="12345678" pattern="" min="10000000" max="99999999" value="<?php echo $employee['employee_id']; ?>"> </td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" name="txtEmail" placeholder="example@email.com" value="<?php echo $employee['email']; ?>"> </td>
		</tr>
		<tr>
			<th>Telephone NO</th>
			<td><input type="tell" name="txtMobile" placeholder="+2547000000000" value="<?php echo $employee['telephone']; ?>"> </td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input class="btn btn-success" type="submit" value="Edit Details" name="btnEdit"> </td>
		</tr>
	</table>
</form>
</div>
</div>
</body>
</html>