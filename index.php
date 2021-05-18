<?php
require 'connection.php'
$result = spellijst();
?>

<!DOCTYPE html>
<html>
<head>
	<title>spel planner</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<?php foreach ($result as $row) { ?>
				<div>
					<img src="./img<?php echo $row["image"] ?>">




				</div>
		<?php $count++; }; ?>
	</div>
</body>
</html>