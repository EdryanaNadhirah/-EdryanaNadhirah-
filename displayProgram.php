<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="deleteProgram.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from program ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any program found !!!</h2>";
}
else
{
?>

<h2 style="color:black">All Programmes</h2>

<div class="row" style="margin-top:10px"></div>
	<table id="myTable" class="table table-bordered">
	<tr>
		<th colspan="8"><a href="index.php?page=addNewProgram">Add New Programmes</a></th>
		<th><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for program name...."></th>
	</tr>

	<Tr class="success">
		<th>No.</th>
		<th>Program ID</th>
		<th>Program Name</th>
		<th>Location</th>
		<th>Date</th>
		<th>Limit Volunteer</th>
		<th>Program Status</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['ProgramID']."</td>";
echo "<td>".$row['ProgramName']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['Date']."</td>";
echo "<td>".$row['VolLimit']."</td>";
echo "<td>".$row['ProgramStatus']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['ProgramID']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_program&ProgramID=".$row['ProgramID']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


<?php }?>