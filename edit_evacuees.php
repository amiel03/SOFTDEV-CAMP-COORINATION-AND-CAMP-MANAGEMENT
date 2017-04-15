<?php
include_once 'dbconfig_registration.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM register_evacuees WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $nameofevacuees = $_POST['nameofevacuees'];
 $age = $_POST['age'];
 $sex = $_POST['sex'];
 $departuredate = $_POST['departuredate'];
 $departuretime = $_POST['departuretime'];
 $remarks = $_POST['remarks'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE register_evacuees SET  nameofevacuees='$nameofevacuees',age='$age',sex='$sex',departuredate='$departuredate',departuretime='$departuretime',remarks='$remarks' WHERE id=".$_GET['edit_id'];
 // sql query for update data into database

 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='edit_evacuees.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: view_evacuees.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CCCM - Registration of Evacuees</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="../resources/vendor/jquery/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Camp Coordination Camp Management</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="nameofevacuees" placeholder="Name of Evacuee" value="<?php echo $fetched_row['nameofevacuees']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="age" placeholder="Age" value="<?php echo $fetched_row['age']; ?>" required /></td>
    </tr>
    <tr>
      <td>
        <select class="form-control" name="sex" value="<?php echo $fetched_row['sex']; ?>" required>
       Sex:<option value="Male"> Male </option>
          <<option value="Female"> Female </option>
     </td>
    </tr>
    <tr>
    <td><input type="text" name="departuredate" id="datepicker" placeholder="Departure Date" value="<?php echo $fetched_row['departuredate']; ?>" required /></td>
    </tr>
    <tr>
      <td><select class="form-control" name="departuretime" value="<?php echo $fetched_row['departuretime']; ?>" required>
    <option selected="">Choose your departure  time </option>
      <option value="00:00 AM">12:00 AM</option>
      <option value="00:30 AM">12:30 AM</option>
      <option value="01:00 AM">01:00 AM</option>
      <option value="01:30 AM">01:30 AM</option>
      <option value="02:00 AM">02:00 AM</option>
      <option value="02:30 AM">02:30 AM</option>
      <option value="03:00 AM">03:00 AM</option>
      <option value="03:30 AM">03:30 AM</option>
      <option value="04:00 AM">04:00 AM</option>
      <option value="04:30 AM">04:30 AM</option>
      <option value="05:00 AM">05:00 AM</option>
      <option value="05:30 AM">05:30 AM</option>
      <option value="06:00 AM">06:00 AM</option>
      <option value="06:30 AM">06:30 AM</option>
      <option value="07:00 AM">07:00 AM</option>
      <option value="07:30 AM">07:30 AM</option>
      <option value="08:00 AM">08:00 AM</option>
      <option value="08:30 AM">08:30 AM</option>
      <option value="09:00 AM">09:00 AM</option>
      <option value="09:30 AM">09:30 AM</option>
      <option value="10:00 AM">10:00 AM</option>
      <option value="10:30 AM">10:30 AM</option>
      <option value="11:00 AM">11:00 AM</option>
      <option value="11:30 AM">11:30 AM</option>
      <option value="12:00 PM">12:00 PM</option>
      <option value="12:30 PM">12:30 PM</option>
      <option value="1:00 PM">01:00 PM</option>
      <option value="1:30 PM">01:30 PM</option>
      <option value="2:00 PM">02:00 PM</option>
      <option value="2:30 PM">02:30 PM</option>
      <option value="3:00 PM">03:00 PM</option>
      <option value="3:30 PM">03:30 PM</option>
      <option value="4:00 PM">04:00 PM</option>
      <option value="4:30 PM">04:30 PM</option>
      <option value="5:00 PM">05:00 PM</option>
      <option value="5:30 PM">05:30 PM</option>
      <option value="6:00 PM">06:00 PM</option>
      <option value="6:30 PM">06:30 PM</option>
      <option value="7:00 PM">07:00 PM</option>
      <option value="7:30 PM">07:30 PM</option>
      <option value="8:00 PM">08:00 PM</option>
      <option value="8:30 PM">08:30 PM</option>
      <option value="9:00 PM">09:00 PM</option>
      <option value="9:30 PM">09:30 PM</option>
      <option value="10:00 PM">10:00 PM</option>
      <option value="10:30 PM">10:30 PM</option>
      <option value="11:00 PM">11:00 PM</option>
      <option value="11:30 PM">11:30 PM</option>
</select></td>
    </tr>
    <tr>
    <td><input type="text" name="remarks" placeholder="Remarks" value="<?php echo $fetched_row['remarks']; ?>" required /></td>
    </tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
