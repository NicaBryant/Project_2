<?php
include "connection.php";

$id=$_GET["id"];
mysqli_query($conn,"delete from  students where id=$id");

?>
<script type="text/javascript">
 window.location="main.php";
</script>