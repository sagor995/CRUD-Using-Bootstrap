<DOCTYPE! html>
  <head>
    <title>
      Bootstrap Assignment
    </title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap.reboot.css"/>
    <link rel="stylesheet" href="css/bootstrap.grid.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </head>
  <body>
      <?php

            include 'home.html';
           $mysqli=mysqli_connect("localhost","root","","data_bootstrap");

            $id=$_GET['id'];

           if (isset($id)) {
              
             $result=$mysqli->query("select * from information where id='$id' limit 0,1");
             $data =$result->fetch_assoc();

      ?>


      <div class="container">

        <?php
            if (isset($_POST['submit'])) {
              $nm=$_POST['nm'];
              $em=$_POST['em'];
              $pn=$_POST['pn'];
              $ad=$_POST['ad'];

               $result=$mysqli->query("update information set name='$nm', email='$em', phone='$pn', address='$ad' where id='$id'");
               if ($result) {
                    ?>
                      <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <strong>Success!</strong>Data updated.
                       	 
                      </div>

                    <?php

                    header('location: show.php');

               }else{
                    ?>
                       <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <strong>Danger!</strong>failed.
                        
                      </div>

                    <?php
               }
            }

        ?>

        <br/>
            <form method="post">
            <div class="form-group">
                <label for="nm">Name</label>
                <input type="text" class="form-control" id="nm" name="nm" aria-describedby="emailHelp" value="<?php echo $data['name'] ?>" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="em">Email</label>
                <input type="email" class="form-control" id="em" name="em" aria-describedby="emailHelp" value="<?php echo $data['email'] ?>" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="pn">Phone</label>
                <input type="text" class="form-control" id="pn" name="pn" aria-describedby="emailHelp" value="<?php echo $data['phone']?>" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="ad">Address</label>
                <textarea class="form-control" id="ad" name="ad"><?php echo $data['address'] ?></textarea>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>



     </div>

    <?php
        }else {
              echo "<script>location.href='show.php'</script>";
            }

     ?>
     

    
  </body>
</html>