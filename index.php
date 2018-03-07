<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Portfolio</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include "_includes/menu.php"; ?>
	<div class="content">
		<h1>Great! You're here!!</h1>
		<h2>Hi there and welcome to my portfolio</h2>

	

		<p>I will be using this webspace for listing references, as well as a playground for whatever i feel like exploring.</p>
		<p>
			<h3>Playground</h3>
			<ul>
				<li><a href="playground/framework.php" target="_self">CSS framework</a>
				</li>
			</ul>
		</p>
	
	<?php
	$section = '<div class="section">section</div>';
	for ( $i = 1; $i <= 5; $i++ ) {
		echo $section;
	}
	?>

	</div>


	
</body>

</html>
</html>