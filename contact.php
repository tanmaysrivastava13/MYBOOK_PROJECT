<?php
session_start();
error_reporting(0);
$con =mysqli_connect('localhost','root','','session');

    $useremail= $_SESSION['emailadd'];
    if($useremail==true){

    }
    else{
      header('location:login.php');
    }


    $query ="Select * FROM signup WHERE email_address='$useremail'";
    $data =mysqli_query($con,$query);
    $result =mysqli_fetch_assoc($data);
?>

<!doctype html>
<html lang="en">

<head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>iCoder - Heaven for Programmers </title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">iCoder</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Topics
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Technology</a>
                        <a class="dropdown-item" href="#">Web Development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Support</a>
                        <a class="dropdown-item" href="#">Write For Us</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact Us</a>


            </ul>
            <script async src="https://cse.google.com/cse.js?cx=c5b0e3905cf8ce084"></script>
                    <div class="gcse-search"></div>

             <div class="mx-2">
                <li class="nav-item">
                  <img src='<?php echo $result['image']; ?>' height='75' width='75' alt="..." class="rounded-circle">
                    <a  class="btn btn-warning" class="nav-link" href="profile.php" > <?php echo $result['username'] ;?> </a>
                </li>
             </div>
             <div class="mx-2">
                <li class="nav-item">
                    <a  class="btn btn-danger" class="nav-link" href="logout.php">Logout</a>
                </li>
            </div>
            
        </div>
    </nav><br></br><br></br>

    <div class="container my-4">
        <h1>Contact Us</h1>

        <form action="register.php" method="post">

            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Your Query</label>
              <select name="issue" class="form-control" id="exampleFormControlSelect1" required>
                <option hidden >..Select the query..</option>
                <option>Web</option>
                <option>Tech Stack</option>
                <option>Technology</option>
                <option>Others</option>
                
              </select>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are You A Member</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input name="member" class="form-check-input" type="checkbox" id="gridCheck1" required>
                    <label class="form-check-label" for="gridCheck1">
                      YES
                    </label>
                  </div>
                </div>
              </div>
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea name="example" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <button  type="submit" class="btn btn-primary">Submit</button>
          </form>
     
    </div>
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020-2022 iCoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>