<?php include_once 'templates/navbar.php' ?>
<?php
include_once 'dbconfig_registration.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM register_evacuees WHERE id=".$_GET['delete_id'];
 mysqli_query($con, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CCCM - Registration of Evacuees</title>


<link href="resources/css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet"  type="text/css" >
<link href="resources/css/agency.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!--<link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.1.118/styles/kendo.common.min.css"/>
<link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.1.118/styles/kendo.rtl.min.css"/>
<link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.1.118/styles/kendo.silver.min.css"/>
<link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.1.118/styles/kendo.mobile.all.min.css"/>-->



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- jQuery -->
<script src="../resources/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../resources/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">

function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_evacuees.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='view_evacuees.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <table style="margin-top:100px;"align="center">
    <tr>
    <th colspan="8"><a href="add_evacuees.php">Register Evacuees here.</a></th>
    </tr>
    <th>Name of Evacuee</th>
    <th>Age</th>
    <th>Sex</th>
    <th>Departure Date</th>
    <th>Departure Time</th>
    <th>Remarks</th>

    <th colspan="2">Operations</th>
</tr>

    <?php
 $sql_query="SELECT * FROM register_evacuees";
 $result_set=mysqli_query($con,$sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td><?php echo $row[4]; ?></td>
          <td><?php echo $row[5]; ?></td>
          <td><?php echo $row[6]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>
<a href="home.php" style="margin-bottom:50px;" class="page-scroll btn btn-danger">Back to Map</a>

</center>
</body>
<?php include_once 'templates/footer.php' ?>
</html>
