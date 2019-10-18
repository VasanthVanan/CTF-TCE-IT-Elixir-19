
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
    <div class="page-body jumbotron col-lg-12 col-md-7 col-sm-6">
      <!-- hall of fame -->
      <legend><h2>- - - ABOUT - - -</h2></legend>
      CTF (Capture-the-Flag) is an ethical hacking contest in which certain pieces of information called ‘flags’ are hidden in the challenges. 
      <br><br> Flags be in the form of Hash values like: " 415ab40ae9b7cc4e66d6769cb2c08106e8293b48 "
      <br/><br/>
      There are 9 different flags hidden in different places. You have to find all these flags as much as you can. 
      Completed Flags will be higlighted with green colour. The more flags you get, the more chance that you win this Contest. 
      Keep an eye on the LeaderBoard!
      <br/><br/>

      <legend><h2>- - - RULES - - -</h2></legend>
      <ul>
        <li>Every Team should consist of 2 members.</li>
        <li>At least one of the Team member should have a Linux-based Operating System( Ubuntu / Kali Linux).</li>
        <li>Duration of the Event: 1 hour - September 24,2019 ( 14:45 to 15:45 )</li>
        <li>prerequisite for the contest - Basic of Linux Commands and Web programming.</li>
        <li>Denial of service is strictly forbidden and  if it is done respective teams will be disqualified.</li>
        <li>Sharing the Flags to other teams is a non-sense. Every Team should work independently.</li>
      </ul>
      </br>

        <legend><h2>- - - SCORE POINTS - - -</h2></legend>
        There are 9 Questions provided to you, which contains hidden flags in it.<br>
        Each Question contains  different point values and levels of difficulty.<br>
       The participants will be ranked based on their scores, and the time taken will be used in case of a tiebreaker.
        <br>However, <strong>extra points</strong> will be given for those who will find security-related flaws
        and issues towards the website.

       
                    </br></br></br>

                    <?php
                    prntfooter();
                    ?>
    </div> <!-- jumbotron -->

    

  </div> <!-- container -->
</body>
<!--====================================================================================================-->
</html>
