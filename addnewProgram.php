<script src="../js/jquery1.js"></script>
<h2>Add New Program</h2>
<form action="index1.php?admin=addProgType1" method="post">
<input type="hidden" name="progId" value="<?php echo $_GET['roomID'];?>">
<table width="800px">
<input type="hidden" name="dateNow" id="dateNow" value="<?php echo $dateNow = date('T-m-d');?>">

<tr>
<tr>
<td width="100px">Program Name</td>
<td width="200px"><input type="text" id="progName" name="progName" size="50"></td>
</tr>
<tr>
<td width="100px">Program ID</td>
<td width="200px"><input type="text" id="progId" name="progId" size="50"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date" id="progDate" name="progDate"></td>
<td><p id="p2"></p></td>
</tr>
<tr>
<td width="100px">Location</td>
<td width="350px"><input type="text" name="location" id="location" size="15"</td>
<td width="250px">&nbsp;</td>
<tr>
<td width="100px">Volunteer Needed</td>
<td width="200px"><input type="text" id="limvol" name="limvol" size="10" onkeyup="if(/\D/g.test(this.value)) this.value = this.value.replace(/\D/g.'')"></td>
<td width="500px"><p id="p3"></td>
</tr>
<tr>
<td width="100px">Program Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="200px">
<select name="progStatus" id="">
<option value="">-- Select --</option>
<option value="active">Active</option>                           
<option value="delayed">Delayed</option>
</select></td>
<td width="500px"><p id="p4"></td>
</tr>
<tr>
<td width="800px" colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="100px">&nbsp;</td>
<td width="700px" colspan="2">
<input type="submit" name="submit" id="submit" value="Save">
</td>
</tr>
</table>
</form>