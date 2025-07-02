<?php
include 'admin.database.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>User Data</h2>
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Pet name</th>
            <th>Pet type</th>
            <th>Pet breed</th>
            <th>Date of birth</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sn=1;
          $user_qry="SELECT * from profiles";
          $user_res=mysqli_query($con, $user_qry);
          while($user_data=mysqli_fetch_assoc($user_res))
          {
          ?>
          <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $user_data['profiles_fullname']; ?></td>
            <td><?php echo $user_data['profiles_gender']; ?></td>
            <td><?php echo $user_data['profiles_address']; ?></td>
            <td><?php echo $user_data['profiles_phone']; ?></td>
            <td><?php echo $user_data['profiles_email']; ?></td>
            <td><?php echo $user_data['profiles_petname']; ?></td>
            <td><?php echo $user_data['profiles_pettype']; ?></td>
            <td><?php echo $user_data['profiles_petbreed']; ?></td>
            <td><?php echo $user_data['profiles_dateofbirth']; ?></td>
          </tr>
          <?php
          $sn++;
          }
          ?>
        </tbody>
      </table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
