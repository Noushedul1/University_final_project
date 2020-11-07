<?php
  $dsn = "mysql:host=localhost; dbname=traveljoin";
  $username = "root";
  $password = "";
  try{
    $conn= new PDO($dsn, $username, $password);
    if(isset($_POST['submit'])) {
      if(($_POST['firstname']=="") || ($_POST['company']=="")){
          echo "<small>Fill all the field.</small><hr>";
      }else{
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $city = $_POST['city'];
        $service = $_POST['service'];
        $company = $_POST['company'];
        $sql = "INSERT INTO carregistration(firstname, lastname, city, service, company) 
        VALUES('$firstname', '$lastname', '$city', '$service', '$company')";
        $result = $conn->exec($sql);
        echo "inserted car value.".$result;
      }
    }
  }
  catch(PDOException $e){
    echo "Fail", $e->getMessage();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Car Registration</title>
  </head>
  <body>
     <!-- Start for header -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">TravelJoin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <!-- End for header -->
    <!-- Start for car registration -->
    <section id="carregistration">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-4">
             <form class="form-container border" action="" method="POST">
              <p class="text-center"><i class="fas fa-car"></i> Car</p>
                <div class="form-group">
                  <div class="msg"></div>
                  <label for="firstname">First Name <span>&star;</span></label>
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Farhad" required>
                </div>
                <div class="form-group">
                  <div class="msg"></div>
                  <label for="lastname">Last Name</label>
                  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Islam">
                </div>
                <div class="form-group">
                  <div class="msg"></div>
                  <label for="city">City <span>&star;</span></label>
                  <input type="text" name="city" class="form-control" id="city" placeholder="Chattogram" required>
                </div>
                <div class="form-group">
                  <div class="msg"></div>
                  <label for="service">Service <span>&star;</span></label>
                  <input type="text" name="service" class="form-control" id="service" placeholder="Passenger" required>
                </div>
                <div class="form-group">
                  <div class="msg"></div>
                  <label for="city">Company<span>&star;</span></label>
                  <input type="text" name="company" class="form-control" id="city" placeholder="Company Name" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block" id="sub">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End for car registration -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
