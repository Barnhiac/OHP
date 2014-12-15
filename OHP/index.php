<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>One Horse Pony</title>
<link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
</head>
<body>
<div>
<?php include("header.inc.php"); ?>
</div>

<div id = "content">
</div>

<div id="main">
	  <?php
               if (!isset($_REQUEST['content']))
                   include("main.inc.php");
               else
               {
                   $content = $_REQUEST['content'];
                   $nextpage = $content . ".inc.php";
                   include($nextpage);
               } ?>
</div>


<div>
	  <?php include("footer.inc.php"); ?>
</div>
</body>
</html>
