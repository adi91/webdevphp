<?php 

if (!isset($_GET['prepath'])) {
    $prepath = '';
  }
  else
	$prepath = $_GET['prepath'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
include 'include.php';
?>

<body>

<div id="Calendar"> </div>
<div id="Events"> </div>
<script language="javascript" src="<?php $prepath . 'web/js/calendar.js'?>"></script>


</body>
</html>