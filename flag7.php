<!DOCTYPE html>
<html>
<head>
	<title>Elixir - CTF Competition</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"              content="width=device-width, initial-scale=1">
  <meta name="description"           content="CS527 Software Security">
  <meta name="author"                content="ispo">

  <!-- our CSS: Bootstrap and our customization -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css"        rel="stylesheet">
  <link href="favicon.ico"           rel="icon">

</head>
<body>
	<div class="flag7">
    <center><br><br><p style="font-size: 20px;";> Congratulations. You got it. <br>The default user name and Password for this website is admin and password. <br>
      <p style="font-size: 20px;";> Here is your 5th Flag:<br></p>
      <p style="font-size: 35px;";>
			<?php
          require('utils.php');
          $conn = dbconn(); 
          session_start();
                $query = "SELECT * FROM flags where no=5" ;
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)){
                  echo $row['flags'];
                }
      ?>  
    </p><br>
     <form action="index.php" method="POST">
     <button class="btn-logout2" >Go back</button>
   </form>
  </center>
 
		</div>
</body>
</html>