<?php 
$q=mysqli_query($conn,"select * from user ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h3 style='color:red'>No volunteers yet!</h2>";
}
else
{
?>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="deleteUser.php?id="+id;
		}
	}
</script>
<h2 style="color:black">LIST OF VOLUNTEER</h2>

<div class="row" style="margin-top:10px"></div>
<tr><table id="myTable"class="table table-bordered">
<th colspan="8">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for user name...."></th>
</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>Register Date</th>
		<th>Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['dor']."</td>";
?>

<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td><?php 

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
    td = tr[i].getElementsByTagName("td")[1];
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