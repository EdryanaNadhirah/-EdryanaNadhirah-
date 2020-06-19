<?php session_start(); include "../dbconfig.php";?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="..js/jquery.js"></script>
<script src="..js/jquery1.js"></script>
<?php
$stmt = $db_con->prepare("SELECT * FROM v_admin WHERE adminID='".$_SESSION['adminID']."'");
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<table width="1000px" align="center" border="0">
<tr>
<td colspan="3"><img src="../image/headeradmin.jpg"></td>
</tr>

<tr>
<td width="800px">
<a href="index1.php">Home</a>&nbsp;|&nbsp;
<a href="index1.php?admin=roomType">Room Type</a>&nbsp;|&nbsp;
<a href="index1.php?admin=listRoom">List Room</a>&nbsp;|&nbsp;
<a href="index1.php?admin=reservationList">Reservation List</a>
</td>
<td width="150px"><?php echo $row['adminName'];?></td>
<td width="150px">[<a href="../logout.php">logout</a>]</td>
</tr>

<tr>
<td valign="top" colspan="3">
       <table width="950px" align="center" border="0">
	   <tr><td height="450px" valign="top">
	   <?php
	   if (isset($_GET['admin'])) {
		   if ($_GET['admin']=='roomType') {
		   include "roomType.php";
	   }
	   
	   else if
($_GET['admin']=='addroomType') {
	       include "addnewType1.php";
       }
	   
       else if
($_GET['admin']=='addroomType') {
	       include "addnewType1.php";
       }
	   
	   	   else if
($_GET['admin']=='editroomType') {
	       include "editroomType.php";
       }
	   
	   	   else if
($_GET['admin']=='addroomType1') {
	       include "editroomType1.php";
       }
	   
	   	   else if
($_GET['admin']=='deleteroomType1deleteroomType1') {
	       include "deleteroomType1.php";
       }
	   
	   else if ($_GET['admin']=='listRoom') {
		   include "listRoom.php";
	   }
	   
	   	   else if ($_GET['admin']=='addRoom') {
		   include "addRoom.php";
	   }
	   
	   	   else if ($_GET['admin']=='addRoom1') {
		   include "addRoom1.php";
	   }
	   
	   	   else if ($_GET['admin']=='listRoomDetail') {
		   include "listRoomDetail.php";
	   }
	   
	   	   else if ($_GET['admin']=='updateRoomDetail') {
		   include "updateRoomDetail.php";
	   }
	   
	   	   else if ($_GET['admin']=='deleteRoom') {
		   include "deleteRoom.php";
	   }
	   
	   	   else if ($_GET['admin']=='reservationList') {
		   include "reservationList.php";
	   }
	   
	   	   else if ($_GET['admin']=='editReservation') {
		   include "editReservation.php";
	   }
	   
	   	   else if ($_GET['admin']=='editReservation1') {
		   include "editReservation1.php";
	   }
	   
}

else {
	include "main.php";
}

echo"</table>";
?>

</td>
</tr>

<tr>
<td colspan="3" align="center"><small>@2018 - Royal Hotel Malaysia</small></td>
</tr>

</table>