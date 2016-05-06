<?php
setcookie("name","",time()-60,"/","",0);
setcookie("gender","male",time()-60,"/","",0);
?>
<!DOCTYPE html>
<html>
<head>
<title>Delete cookies with php</title>
</head>
<body>
	<?php echo "deleted cookies"; ?>
</body>
</html>
