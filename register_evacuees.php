<header>

<head>


    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet">
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
  <!--<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://kendo.cdn.telerik.com/2017.1.118/js/kendo.all.min.js">-->


    <script>

  $(function(){
    var pickerOpts = {
        dateFormat: "yy-mm-dd"
    };
    $("#datepicker").datepicker(pickerOpts);
});




</script>
</head>



<?php


include_once ('templates/navbar.php');

?>



<br/>
<br/>
<br/>
<br/>
<h1> Register Evacuees here </h1>
<br/>
<br/>
<br/>
<br/>


<form class="form-horizontal" role="form" method="post" action="dbcon.php">

	<div class="form-group">
		<label for="name" class="col-sm-4 control-label">Name of Evacuee</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>

		</div>
	</div>
	<div class="form-group">
		<label for="contact" class="col-sm-4 control-label">Age</label>
		<div class="col-sm-5">
			<input type="contact" class="form-control" id="contact" name="age" placeholder="" value="" required>
		</div>
	</div>

	<div class="form-group">
		<label for="tent" class="col-sm-4 control-label">Sex</label>


		<div class="col-sm-3">
		    <input class="form-check-input" type="radio" name="inlineRadioOptions" value="Male" required> Male
		    <input class="form-check-input" type="radio" name="inlineRadioOptions" value="Female" required> Female
		</div>

	</div>



			<div class="form-group">
		<label for="date" class="col-sm-4 control-label">Departure Time:</label>
		<div class="col-sm-3">
		<select class="form-control" name="departuretime" required>
			<option selected="">Choose your desired time </option>
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
	</select>
  		</div>
  		</div>



  		<div class="form-group">
			<!--<label class="col-sm-4 control-label" for="date">End date for the borrowed Tent</label>
			<div class="col-sm-5">
        <input type="text" name="date1" value="<?php //echo date('Y-m-d'); ?>" />
        </div>-->
        <label for="date" class="col-sm-4 control-label">Departure Date:</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="datepicker" placeholder="" name="departuredate" value="" required>
		</div>
		</div>

		<div class="form-group">
 		 <label for="comment" class="col-sm-4 control-label">Remarks:</label>
 		 <div class="col-sm-5">
  			<textarea class="form-control" rows="5" id="remarks" name="remarks"></textarea>
		</div>
		</div>


		<br/>
		<br/>
		<br/>




	<div class="form-group">
		<div class="col-sm-5 col-sm-offset-4">
			<input id="submit" name="register" type="submit" value="Register" class="btn btn-primary">
			<a href="/camp/home.php" class="page-scroll btn btn-danger">Back to Map</a>
		</div>

	</div>
	<div class="form-group">
		<div class="col-sm-5 col-sm-offset-2">
			<! Will be used to display an alert to the user>
		</div>
	</div>

</form>





  <body style="margin:0px; padding:0px;" onload="load()">



    <!--<div>
	Location:
     <input type="text" id="addressInput" size="10"/>
    <select id="radiusSelect">
      <option value="25" selected>25mi</option>
      <option value="100">100mi</option>
      <option value="200">200mi</option>
    </select>-->

    <!--<input type="button" onclick="initMap()" value="Search"/>
    </div></br>
	<input type="button" onclick="searchCamp()" value="Search Camp"/>
	<input type="button" onclick="searchEvac()" value="Search Evacuation Centers"/>
	<input type="button" onclick="mapList()" value="Map Directory"/>
  <div><select id="locationSelect" style="width:100%;visibility:hidden"></select></div>-->
  <div id="map" style="width: 100%; height: 10%"></div>
  <!--<div id="legend"><h3>Legend</h3></div>-->




  </body>


<?php
include_once ('templates/footer.php');
?>


<!--</center>
 6.75255, 124.80163 - Phil
14.60770, 120.98202 - Manila
11.2543, 124.9617 - Tacloban
AIzaSyB2n2JXYxGi0aCarhZ1old66kznkM4JS5Y - API KEY

</html>
 </header>-->
