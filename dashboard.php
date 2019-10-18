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

        if($_COOKIE["seen"] == 0){
          setcookie("seen",1, time() + (86400 * 30), "/");
            header('Location: about.php');      // redirect
            exit; 
        }

        prntnavbar();                           // print navigation bar
    /* -------------------------------------------------------------------------------- */
    ?>

  <div class="container">
    <div class="jumbotron">
      <h1>Challenges</h1>
      <?php
      /* -------------------------------------------------------------------------------- */
        //prntusr();                              // print user's info

      /* -------------------------------------------------------------------------------- */
      ?>
      <legend><h2>Easy: &nbsp;{20 Points}</h2></legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <button id="myBtn" class="btn-logout2" onclick="popup('myModal','myBtn','close')">Challenge #01</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button id="myBtn2" onclick="popup('myModal2','myBtn2','close2')" class="btn-logout2">Challenge #02</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button id="myBtn3" onclick="popup('myModal3','myBtn3','close3')" class="btn-logout2">Challenge #03</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <br><br>
      <?php 
          if(isset($_COOKIE['_1'])){
            echo "<script>document.getElementById('myBtn').style.background='#20C20E';</script>";
          }
      ?>
      <?php 
          if(isset($_COOKIE['_2'])){
            echo "<script>document.getElementById('myBtn2').style.background='#20C20E';</script>";
          }
      ?>

      <?php 
          if(isset($_COOKIE['_3'])){
            echo "<script>document.getElementById('myBtn3').style.background='#20C20E';</script>";
          }
      ?>
      <legend>

      <h2>Medium: &nbsp;{30 Points}</h2></legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <button id="myBtn4" onclick="popup('myModal4','myBtn4','close4')" class="btn-logout2">Challenge #04</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <button id="myBtn5" onclick="popup('myModal5','myBtn5','close5')" class="btn-logout2">Challenge #05</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <button id="myBtn6" onclick="popup('myModal6','myBtn6','close6')" class="btn-logout2">Challenge #06</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <br><br>
      <?php 
          if(isset($_COOKIE['_4'])){
            echo "<script>document.getElementById('myBtn4').style.background='#20C20E';</script>";
          }
      ?>
      <?php 
          if(isset($_COOKIE['_5'])){
            echo "<script>document.getElementById('myBtn5').style.background='#20C20E';</script>";
          }
      ?>
      <?php 
          if(isset($_COOKIE['_6'])){
            echo "<script>document.getElementById('myBtn6').style.background='#20C20E';</script>";
          }
      ?>
      <legend><h2>Hard: &nbsp;{50 Points}</h2></legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <button id="myBtn7" onclick="popup('myModal7','myBtn7','close7')" class="btn-logout2">Challenge #07</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
    <button id="myBtn8" onclick="popup('myModal8','myBtn8','close8')" class="btn-logout2">Challenge #08</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <button id="myBtn9" onclick="popup('myModal9','myBtn9','close9')" class="btn-logout2">Challenge #09</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <br><br>
      &nbsp;&nbsp;&nbsp;
      <?php 
          if(isset($_COOKIE['_7'])){
            echo "<script>document.getElementById('myBtn7').style.background='#20C20E';</script>";
          
          }
      ?>
      <?php 
          if(isset($_COOKIE['_8'])){
            echo "<script>document.getElementById('myBtn8').style.background='#20C20E';</script>";
          }
      ?>
      <?php 
          if(isset($_COOKIE['_9'])){
            echo "<script>document.getElementById('myBtn9').style.background='#20C20E';</script>";
          }
      ?>
         <!-- Modal content 1 -->
        <div id="myModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span id="cross" class="close">&times;</span>
              <h2><b>Challenge 01 - Comments are Welcome</b></h2>
            </div>
            <div class="modal-body">
              <br><p>Flags are divided in to 5 Parts. These flags are hidden in the comment sections.</p>
              <p>Find those hidden flags in the code files. (html,css,js)</p>
              <p><a href="/CTF/github-master" target="_blank">Here is the file!</a></p>
              <p style="color: #20C20E;">Hint: concatenate every part of flag to get the precious FLAG</p>
            </div>
            <div class="modal-footer">
              <br>

              <center>
                <p>Paste the flag here: </p>
                <form action="validateFLAGS.php" method="POST"><input type="" name="flag1"><br><br>
              <button class="btn-logout2">Submit</button>
            </form>
            </center>
            <br><br>
            </div>
          </div>

        </div>
        <!-- Modal content 1 ends here -->

        <!-- Modal content 2 -->
        <div id="myModal2" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span id="cross" class="close2">&times;</span>
              <h2><b>Challenge 02 - RGB Colors</b></h2>
            </div>
            <div class="modal-body">
              <br><p>Sasi Karan has 6 colours with him in RGB format.</p>
              <p style="font-size: 18px;"><ul><li>RGB( 173,120,46 )</li><li>RGB( 205,172,119 )</li> <li>RGB( 15,198,235 )</li> <li>RGB( 154,98,228 )</li> <li>RGB( 79,144,135 )</li> <li>RGB( 63,185,127 )</li></p>
              <p>He needs to use those colors in Photoshop. Help him by finding out the respective Hex codes for the colors</p>
              <p style="color: #20C20E;">Hint: concatenate every hexcodes to get the precious FLAG</p>
            </div>
            <div class="modal-footer">
              <br>
              <center>
                <p>Paste the flag here: </p>
                <form action="validateFLAGS.php" method="POST"><input type="" name="flag2"><br><br>
              <button class="btn-logout2">Submit</button>
            </form>
            </center>
            <br><br>
            </div>
          </div>

        </div>
        <!-- Modal content 2 ends here -->

              <!-- Modal content 3 -->
        <div id="myModal3" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span id="cross" class="close3">&times;</span>
              <h2><b>Challenge 03 - Cryptography</b></h2>
            </div>
            <div class="modal-body">
              <br><p><i>o802s384302po24sono0n44997r820os2r8507oo</i></p>
              <p>Cryptography doesn't have to be complicated, have you ever heard of something called rot13?</p>
        
              <p style="color: #20C20E;">Hint: Search Engines are your friend!</p>
            </div>
            <div class="modal-footer">
              <br>
              <center>
                <p>Paste the flag here: </p>
                <form action="validateFLAGS.php" method="POST">
                  <input type="" name="flag3"><br><br>
              <button class="btn-logout2">Submit</button>
            </form>
            </center>
            <br><br>
            </div>
          </div>

        </div>
        <!-- Modal content 3 ends here -->

        <!-- Modal content 4 -->
        <div id="myModal4" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span id="cross" class="close4">&times;</span>
              <h2><b>Challenge 04 - Changing is Constant</b></h2>
            </div>
            <div class="modal-body">
              <br><p>This <a href="images/changing-is-constant.jpg" download>quote</a> has a secret to teach you.</p>
              <p>Identify the Flag hidden behind. May be a Search Engine knows.</p>
              <p style="color: #20C20E;">Hint: xxD 😆😆</p>
            
            </div>
            <div class="modal-footer">
              <br>
              <center>
                <p>Paste the flag here: </p>
                <form action="validateFLAGS.php" method="POST"><input type="" name="flag4"><br><br>
              <button class="btn-logout2">Submit</button>
            </form>
            </center>
            <br><br>
            </div>
          </div>

        </div>
        <!-- Modal content 4 ends here -->

                <!-- Modal content 5 -->
        <div id="myModal5" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span id="cross" class="close5">&times;</span>
              <h2><b>Challenge 05 - Default Passwords</b></h2>
            </div>
            <div class="modal-body">
              <br><p>A default password is a password supplied by the manufacturer / creator with new equipment / software that is password protected</p>
              <p>Attackers use default passwords in the lists of words or dictionary that they use to perform password guessing attack.
              </p><p>Try to figure out the default passwords, and apply on this website to get the precious FLAG.</p>
            </div>
            <div class="modal-footer">
              <br><center>
              <p>Paste the flag here: </p>
              <form action="validateFLAGS.php" method="POST"><input type="" name="flag5"><br><br>
              <button class="btn-logout2">Submit</button>
            </form>
            </center>
            <br><br>
            </div>
          </div>

        </div>
        <!-- Modal content 5 ends here -->

        <!-- Modal content 6 -->
        <div id="myModal6" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span id="cross" class="close6">&times;</span>
              <h2><b>Challenge 06 - </b></h2>
            </div>
            <div class="modal-body">
              <br><p>Try to figure out the default passwords, and apply on this website to get the precious FLAG.</p>
            </div>
            <div class="modal-footer">
              <br><center>
              <p>Paste the flag here: </p>
              <form action="validateFLAGS.php" method="POST"><input type="" name="flag6"><br><br>
              <button class="btn-logout2">Submit</button>
            </form>
            </center>
            <br><br>
            </div>
          </div>

        </div>
        <!-- Modal content 6 ends here -->

        <!-- Modal content 7 -->
        <div id="myModal7" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span id="cross" class="close7">&times;</span>
              <h2><b>Challenge 07 - I Love 5000th Visitor</b></h2>
            </div>
            <div class="modal-body">
              <br><p>I don't think you have good observing skill. Look at each Page carefully. and notice what is changing.</p>
              <p>We provide you the 7th Flag as Reward. Go get it! </p>
              <p style="color: #20C20E;">Hint: Not this time.</p>
            </div>
            <div class="modal-footer">
              <br>
              <center>
                <p>Paste the flag here: </p>
                <form action="validateFLAGS.php" method="POST"><input type="" name="flag7"><br><br>
              <button class="btn-logout2">Submit</button>
            </form>
            </center>
            <br><br>
            </div>
          </div>

        </div>
        <!-- Modal content 7 ends here -->

        <!-- Modal content 8 -->
        <div id="myModal8" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span id="cross" class="close8">&times;</span>
              <h2><b>Challenge 08 - Steganography</b></h2>
            </div>
            <div class="modal-body">
              <br><p>Steganography is data hidden within data. It is the process of hiding a secret message in a data file and passing over the network.</p>
              <p>Search more about "<b>steganography tools for images in command line</b>" to find the secret message (flag) from the below file.</p>
              <p><a href="images/proxy.jpeg" download>Here is the file!</a></p>
            </div>
            <div class="modal-footer">
              <br>
              <center>
                <p>Paste the flag here: </p>
                <form action="validateFLAGS.php" method="POST"><input type="" name="flag8"><br><br>
              <button class="btn-logout2">Submit</button>
            </form>
            </center>
            <br><br>
            </div>
          </div>

        </div>
        <!-- Modal content 8 ends here -->

                <!-- Modal content 9 -->
        <div id="myModal9" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span id="cross" class="close9">&times;</span>
              <h2><b>Challenge 09 - NO Ctrl + F</b></h2>
            </div>
            <div class="modal-body">
              <br><p>You are given a leaf of 900+ files and folders. Identify all the parts of the flag hidden in those folders.</p>
              <p>Brute forcing and checking every folder and files or using CTRL + F is a bad idea. Think effectively with UNIX commands.</p>
              
              <p><a href="leetcode-solutions-cpp.zip" download>Here is the file! (NETCAT)</a></p>
              <p style="color: #20C20E;">Hint: use ls / find commands to get the precious FLAG.</p>
            </div>
            <div class="modal-footer">
              <br>
              <center><p>Paste the flag here: </p>
               <form action="validateFLAGS.php" method="POST"><input type="" name="flag9"><br><br>
              <button class="btn-logout2">Submit</button>
            </form>
            </center>
            <br><br>
            </div>
          </div>

        </div>
        <!-- Modal content 09 ends here -->

    </br></br></br>    
    </div> <!-- jumbotron -->

    <?php prntfooter(); ?>

  </div> <!-- container -->                                  
</body>
<!--====================================================================================================-->
</html>

<script>
function popup(modal,id,close){
    var modal = document.getElementById(modal);
    var btn = document.getElementById(id);
    var span = document.getElementsByClassName(close)[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
}
</script>


