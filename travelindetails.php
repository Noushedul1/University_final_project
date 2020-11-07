<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>TravelIn Details</title>
  </head>
  <body>
     <section>
      <div class="container">
        <h1 class="text-center">TravelIn Details</h1>
        <div class="row">
          <div class="col-4">
            <h4 class="text-center"><strong>Car</strong></h4>
             <?php
              $dsn = "mysql:host=localhost; dbname=traveljoin";
              $username = "root";
              $password = "";

              try{
                 $conn = new PDO($dsn, $username, $password);
                 $sql = "SELECT * FROM carregistration WHERE company='travelIn'";
                 $data = $conn->query($sql);

                 echo "<table border='1'>
                <tr>
                  <th>ID</th>
                  <th>FirstName</th>
                  <th>City</th>
                  <th>Service</th>
                </tr>
              ";
                 foreach ($data as $row) {
                   echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["firstname"]."</td>
                        <td>".$row["city"]."</td>
                        <td>".$row["service"]."</td>
                   </tr>";
                 }
                 echo "</table>";
              }
              catch(PDOException $e){
                echo "Fail",$e->getMessage();
              }
            ?>
            </div>
          <div class="col-4">
            <h4 class="text-center"><strong>Bike</strong></h4>
             <?php
      $dsn = "mysql:host=localhost; dbname=traveljoin";
      $username = "root";
      $password = "";

      try{
         $conn = new PDO($dsn, $username, $password);
         $sql = "SELECT * FROM bikeregistration WHERE company='travelIn'";
         $data = $conn->query($sql);

         echo "<table border='1'>
        <tr>
          <th>ID</th>
          <th>FirstName</th>
          <th>City</th>
          <th>Service</th>
        </tr>
      ";
         foreach ($data as $row) {
           echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["firstname"]."</td>
                <td>".$row["city"]."</td>
                <td>".$row["service"]."</td>
           </tr>";
         }
         echo "</table>";
      }
      catch(PDOException $e){
        echo "Fail",$e->getMessage();
      }
    ?>
          </div>
          <div class="col-4">
            <h4 class="text-center"><strong>Cycle</strong></h4>
             <?php
      $dsn = "mysql:host=localhost; dbname=traveljoin";
      $username = "root";
      $password = "";

      try{
         $conn = new PDO($dsn, $username, $password);
         $sql = "SELECT * FROM cycleregistration WHERE company='travelIn'";
         $data = $conn->query($sql);

         echo "<table border='1'>
        <tr>
          <th>ID</th>
          <th>FirstName</th>
          <th>City</th>
          <th>Service</th>
        </tr>
      ";
         foreach ($data as $row) {
           echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["firstname"]."</td>
                <td>".$row["city"]."</td>
                <td>".$row["service"]."</td>
           </tr>";
         }
         echo "</table>";
      }
      catch(PDOException $e){
        echo "Fail",$e->getMessage();
      }
    ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
