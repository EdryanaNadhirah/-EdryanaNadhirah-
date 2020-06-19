<?php 
include('../connection.php');
extract($_POST);
if(isset($add))
{

	if($ProgramID=="")
	{
	   $err="<font color='red'>Fill the ProgramID</font>";	
	}
	else if ($ProgramName=="")
	{
	   $err2="<font color='red'>Fill the Program Name</font>";	
	}
	else if ($Description=="")
	{
	   $err3="<font color='red'>Fill the location</font>";	
	}
	else if ($Date=="")
	{
	   $err4="<font color='red'> *Only future date</font>";	
	}
	else if ($VolLimit=="")
	{
	   $err5="<font color='red'>Fill the Volunteer limit</font>";	
	}
	else if ($ProgramStatus=="")
	{
	   $err6="<font color='red'>Select the Program Status</font>";	
	}
	else
	{
		
mysqli_query($conn,"insert into program values('$ProgramID','$ProgramName','$Description','$Date','$VolLimit','$ProgramStatus')");
		$err="<font color='green'>Program added successfully</font>";	
	}
}

?>

<h2>Add New Program</h2>
<form method="post">
<input type="hidden" name="dateNow" id="dateNow" value="<?php echo $dateNow = date('Y-m-d');?>">
<p id="p4">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	<div class="row">
		<div class="col-sm-4">Enter Program ID.</div>
		<div class="col-sm-5">
		<input type="text" p id="p1" name="ProgramID" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err2;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Program Name</div>
		<div class="col-sm-5">
		<textarea name="ProgramName" p id="p2" class="form-control"></textarea></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err3;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Description(Location)</div>
		<div class="col-sm-5">
		<textarea name="Description" p id="p3" class="form-control"></textarea></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err4;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Date</div>
		<div class="col-sm-5">
		<input type="date" p id="Date" name="Date">
	</div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err5;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Volunteer Needed</div>
		<div class="col-sm-5">
		<input type="text" p id="p5" name="VolLimit" class="form-control"/>
	</div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err6;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Program Status</div>
		<div class="col-sm-5">
		<input type="radio" id="p6" name="ProgramStatus" value="Active">Active<br>
		<input type="radio" id="p6" name="ProgramStatus" value="Unactive">Unactive<br>
		<input type="radio" id="p6" name="ProgramStatus" value="Delayed">Delayed</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Program" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	