<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=500, initial-scale=1">
	<title>Portfolio</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include "_includes/menu.php"; ?>
	<div class="content">
		<h1>Great! You're here!!!</h1>
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
	$table = '<table class="table ">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th>Keywords</th>
                        <th>Last updated</th>
                        <th>Last 30 days</th>
                        <th class="table-actions"></th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
        
<td>Videresendelse til intranet</td>
<td class="table-status">
    <input value="3" class="jsAId" type="hidden">
    <input value="1" class="jsTId" type="hidden">
        <div class="status-icon-active switch"></div>
        <button class="button-start-stop jsActionDeactivate">stop</button>
</td>
<td>Forward to URL</td>
<td style="text-align:left;">CME </td>
<td>10/19/2017 2:26:49 PM</td>
<td>0</td>
<td>
    <button class="status-icon-edit right jsActionEdit jsLaunchModal"></button>
    <button class="status-icon-delete jsActionDelete jsLaunchModal"></button>
</td>

    </tr>
    <tr>
        
<td>Fast svar</td>
<td class="table-status">
    <input value="4" class="jsAId" type="hidden">
    <input value="2" class="jsTId" type="hidden">
        <div class="status-icon-done switch"></div>
        <button class="button-start-stop jsActionActivate">start</button>
</td>
<td>Automatic reply</td>
<td style="text-align:left;">CME </td>
<td>10/20/2017 1:54:21 PM</td>
<td>0</td>
<td>
    <button class="status-icon-edit right jsActionEdit jsLaunchModal"></button>
    <button class="status-icon-delete jsActionDelete jsLaunchModal"></button>
</td>

    </tr>

                </tbody>
            </table>';
		$section = '<div class="section">section</div>';
	$section2 = '<div class="section">'.$table.'</div>';

	
	for ( $i = 1; $i <= 5; $i++ ) {
		if ($i == 3){
			echo $section2;
		} else {
			echo $section;
		};
	};
	?>

	</div>


	
</body>

</html>
</html>