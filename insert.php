<DOCTYPE! html>
  <head>
    <title>
      CRUD
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

           if (isset($_POST['submit'])) {
              $nm=$_POST['nm'];
              $em=$_POST['em'];
              $pn=$_POST['pn'];
              $ad=$_POST['ad'];

               $mysqli=mysqli_connect("localhost","root","","data_bootstrap");

               $result=$mysqli->query("insert into information(name,email,phone,address)values('$nm','$em','$pn','$ad')");
               if ($result) {
                    ?>
                      <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <strong>Success!</strong>Data inserted.
                      </div>

                    <?php
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


      <div class="container">
        <br/>
            <form method="post">
            <div class="form-group">
                <label for="nm">Name</label>
                <input type="text" class="form-control" id="nm" name="nm"  placeholder="Full/Name" required>
                
            </div>
            <div class="form-group">
                <label for="em">Email</label>
                <input type="email" class="form-control" id="em" name="em"  placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="pn">Phone</label>
                <input type="number" class="form-control" id="pn" name="pn"  placeholder="Mobile Number" required>
            </div>
            <div class="form-group">
                <label for="ad">Address</label>
                <textarea class="form-control" id="ad" name="ad"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
           </form>
     </div>

    
  </body>
</html>