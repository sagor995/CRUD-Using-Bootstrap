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
      ?>


      <div class="container">

        <br/>
        <table class="table table-bordered table-striped">
              <thread>

                  <tr class="table-success">
                    <th width="50">No.</th>
                    <th>Name</th>
                    <th width="300">Email</th>
                     <th>Phone</th>
                    <th width="300">Address</th>
                    <th width="50">Action</th>
                  </tr>
               </thread>
              <tbody>

            <?php

              $result=$mysqli->query("select * from information");
              $id=1;
                while ($row=$result->fetch_assoc()) {
            ?>

                <tr >
                  <td><?php  echo $id++ ?></td>
                  <td><?php  echo $row['name']?></td>
                  <td><?php  echo $row['email']?></td>
                  <td><?php  echo $row['phone']?></td>
                  <td><?php  echo $row['address']?></td>
                  <td>
                       <a onclick="resurn_confirm('Are you sure?')" href="delete.php?id=<?php  echo $row['id'] ?>" class="btn btn-outline-danger">Delete</a>

                  </td>
                </tr>

                 <?php

                    }
                ?> 
              </tbody>

        </table>


     </div>
    
  </body>
</html>