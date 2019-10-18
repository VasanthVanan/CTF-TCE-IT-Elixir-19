<?php
	
	require('utils.php');
	$conn = dbconn();                      
    session_start();

   	$flag = '';
   	$qn = 0;
   	$name = $_SESSION['team'];

   		if(isset($_POST['flag1'])){
   			$flag = $_POST['flag1'];
   			$qn = 1;
   		}
   		if(isset($_POST['flag2'])){
   			$flag = strtolower($_POST['flag2'])."b26b";
   			$qn = 2;
   		}
   		if(isset($_POST['flag3'])){
   			$flag = $_POST['flag3'];
   			$qn = 3;
   		}
   		if(isset($_POST['flag4'])){
   			$flag = $_POST['flag4'];
   			$qn = 4;
   		}
   		if(isset($_POST['flag5'])){
   			$flag = $_POST['flag5'];
   			$qn = 5;
   		}
   		if(isset($_POST['flag6'])){
   			$flag = $_POST['flag6'];
   			$qn = 6;
   		}
   		if(isset($_POST['flag7'])){
   			$flag = $_POST['flag7'];
   			$qn = 7;
   		}
   		if(isset($_POST['flag8'])){
   			$flag = $_POST['flag8'];
   			$qn = 8;
   		}
   		if(isset($_POST['flag9'])){
   			$flag = $_POST['flag9'];
   			$qn = 9;
   		}


   	 	$query = "SELECT * FROM flags where no='".$qn."'" ;
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result)){
          $cf = $row['flags'];
        }

        if($cf == $flag ){
        	$score = 0;
        	echo "<script>alert('You got the correct Flag');</script>";
        	if($qn >=1 and $qn <=3){
        		$query = "SELECT * FROM board where team='".$name."'" ;
        		$result2 = mysqli_query($conn,$query);
        		while($row = mysqli_fetch_array($result2)){
        			$score = $row['points']; 
        		}
        		$score += 20;

        		$sql = "UPDATE board SET points='".$score."' WHERE team='".$name."'";
        		$result = mysqli_query($conn,$sql);
        	}
        	if($qn >=4 and $qn <=6){
        		$query = "SELECT * FROM board where team='".$name."'" ;
        		$result2 = mysqli_query($conn,$query);
        		while($row = mysqli_fetch_array($result2)){
        			$score = $row['points']; 
        		}
        		$score += 30;

        		$sql = "UPDATE board SET points='".$score."' WHERE team='".$name."'";
        		$result = mysqli_query($conn,$sql);
        	}
        	if($qn >=7 and $qn <=9){
        		$query = "SELECT * FROM board where team='".$name."'" ;
        		$result2 = mysqli_query($conn,$query);
        		while($row = mysqli_fetch_array($result2)){
        			$score = $row['points']; 
        		}
        		$score += 50;

        		$sql = "UPDATE board SET points='".$score."' WHERE team='".$name."'";
        		$result = mysqli_query($conn,$sql);
        	}
        	setcookie("_".$qn,true, time() + (86400 * 30), "/");
        }
        else{
        	echo "<script>alert('Flag Incorrect');</script>";
        }
        
        	header( "Refresh:0; url=dashboard.php", true, 303);

?>