<!DOCTYPE html>
<html lang="en">
<!--====================================================================================================-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"              content="width=device-width, initial-scale=1">
	<meta name="description"           content="CS527 Software Security">
	<meta name="author"                content="ispo">

	<!-- our CSS: Bootstrap and our customization -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css"        rel="stylesheet">
	<link href="favicon.ico"           rel="icon">

	<title>Elixir - CTF Competition</title>
</head>
<!--====================================================================================================-->
<body>
		<?php 
		/* -------------------------------------------------------------------------------- */
				require( 'utils.php' );                 // import core security functions

				session_start();                        // start session

				if( !isset( $_SESSION['uid'] ) ) {      // not logged in?
						header('Location: index.php');      // redirect
						exit;                               // don't forget this!
				}

				prntnavbar();                           // print navigation bar
		/* -------------------------------------------------------------------------------- */
		?>

	<div class="container">
		<div class="jumbotron">
			<h1><img class="partner" src="images/crown.png" height="50" data-toggle="tooltip" 
								data-placement="bottom">&nbsp;&nbsp;Leader Board</h1>
			</br>
			<center><i> ( Even last minute a Miracle can happen, Don't Ever give up! )</i></center>
			</br>
			<table class="table center-table">
				<thead> <tr>
						<th class='col-md-1'>##    </th>
						<th class='col-md-8'>Name  </th>
						<th class='col-md-2'>Points</th>
				</tr> </thead>
				
				<tbody>
				</tbody>
			</table> </br>      
		</div> <!-- jumbotron -->

	
	</div> <!-- container -->

</body>
<!--====================================================================================================-->
</html>

