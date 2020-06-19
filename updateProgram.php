<?php
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update program set ProgramID='$ProgramID',ProgramName='$ProgramName',Description='$Description',Date='$Date',VolLimit='$VolLimit',ProgramStatus='$ProgramStatus' where ProgramID='".$_GET['ProgramID']."'");
$err="<font color='blue'>Program updated </font>";

}

//select old notice

$q=mysqli_query($conn,"select * from program where ProgramID='".$_GET['ProgramID']."'");
$res=mysqli_fetch_array($q);

?>
<h2>UPDATE NOTICE</h2>
<form method="post">

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>

	<div class="row">
		<div class="col-sm-4">Enter Program ID.</div>
		<div class="col-sm-5">
		<input type="text" name="ProgramID" value="<?php echo $res['ProgramID']; ?>" class="form-control"/></div>
	</div>

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>

	<div class="row">
		<div class="col-sm-4">Enter Program Name</div>
		<div class="col-sm-5">
		<input type="text" name="ProgramName" value="<?php echo $res['ProgramName']; ?>" class="form-control"/></div>
	</div>

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Description(Location).</div>
		<div class="col-sm-5">
		<input type="text" name="Description" value="<?php echo $res['Description']; ?>" class="form-control"/></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Date</div>
		<div class="col-sm-5">
		<input type="date" name="Date" value="<?php echo $res['Date']; ?>" class="form-control"/></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Limit Volunteer</div>
		<div class="col-sm-5">
		<input type="text" name="VolLimit" value="<?php echo $res['VolLimit']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Program Status</div>
		<div class="col-sm-5">
		<input type="text" name="ProgramStatus" value="<?php echo $res['ProgramStatus']; ?>" readonly /><br>
		<input type="radio"  name="ProgramStatus" value="Active">Active<br>
		<input type="radio"  name="ProgramStatus" value="Unactive">Unactive<br>
		<input type="radio"  name="ProgramStatus" value="Delayed">Delayed</div>
	</div>

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
		<div class="row" style="margin-top:10px"></div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>

		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Notice" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>