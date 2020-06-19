<?php
$stmt = $db_con->prepare("INSERT INTO  VALUES(:programId,  :progName,  :location,  :progStatus, :limvol, :progDate)");
$stmt->bindParam(":programId", $_POST['programId']);
$stmt->bindParam(":progName", $_POST['progName']);
$stmt->bindParam(":location", $_POST['location']);
$stmt->bindParam(":progStatus", $_POST['progStatus']);
$stmt->bindParam(":limvol", $_POST['limvol']);
$stmt->bindParam(":progDate", $_POST['progDate']);

if($stmt->execute()) {
	echo"<script>document.location.href='index1.php?admin=programs';</script>";
}

else {
	echo"<script>document.location.href='index1.php?admin=programs';</script>";
}
?>