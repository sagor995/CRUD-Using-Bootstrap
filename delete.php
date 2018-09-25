<?php
			
			include 'home.html';
          $mysqli=mysqli_connect("localhost","root","","data_bootstrap");
			$id=$_GET['id'];
			if (isset($id)) {

					 $result=$mysqli->query("delete from information where id='$id'");
					 if ($result) {
					 	echo "<script>alert('Data Deleted');location.href='show.php';</script>";
					 }else{
					 		header('location: home.html');

					 }

				}
      ?>