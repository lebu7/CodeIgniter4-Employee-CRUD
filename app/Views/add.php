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
      <a class="navbar-brand" >Add Record</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url('employee') ?>">Home</a></li>

    </ul>
  </div>
</nav>

<div class="container">
<div class="jumbotron">
    <form method="post" name="frmAdd" action="<?php echo site_url('employee/store');?>">
        <table class="table" align="center">
            <tr>
                <label colspan="2" align="center"><h2>Employee Data</h2></label>
            </tr>

            <tr>
                <th>First Name</th>
                <td><input type="text" name="txtFname" placeholder="First name"> </td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="txtLname" placeholder="Surname"> </td>
            </tr>
            <tr>
                <th>Residence</th>
                <td><textarea name="txtResidence" rows="3" cols="20" placeholder="Employee home address..."></textarea> </td>
            </tr>
            <tr>
                <th>Employee ID</th>
                <td><input type="number" name="txtEid" placeholder="12345678" pattern="" min="10000000" max="99999999"> </td>
            </tr>
            <tr>
                <tr>
                <th>Email</th>
                <td><input type="email" name="txtEmail" pattern="[a-z0-9._%+-]+@[a-z]+.[com]{3,}$" placeholder="example@email.com"> </td>
            </tr>
            <tr>
                <th>Telephone NO</th>
                <td><input type="tel" name="txtMobile" placeholder="+2547000000000"> </td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input class="btn btn-success"  type="submit" value="Add Details" name="btnadd"> </td>
            </tr>
        </table>

</form>
</div>
</div>
</body>
</html>