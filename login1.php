
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
    <style type="text/css">


    <style> 

*
{
    outline: none;
}

.col
{
    display: table-cell;
    vertical-align: middle;
}

input, button
{
    font-family: Nunito;
    padding: 0;
    margin: 0;
    border: 0;
    background-color: transparent;
}

.search_phase
{
    width: 600px;
    padding: 2px;
    border-radius: 24px;
  border: 2px solid #dfe1e5;
    transform: scale(0.5);
}
.search_phase:hover{ 
 -moz-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
      -webkit-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
      -o-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
}
input[type="text"]
{
    width: 100%;
    height: 100%;
    font-size: 50px;
}
button
{
    position: relative;
    display: block;
    width: 80px;
    height: 90px;
    cursor: pointer;
}

#search-circle
{
    position: relative;
    top: -8px;
    left: 0;
    width: 30px;
    height: 30px;
    margin-top: 0;
    border-width: 15px;
    border: 15px solid #4285f4;
    background-color: transparent;
    border-radius: 50%;
    transition: 0.5s ease all;
}

button span
{
    position: absolute;
    top: 68px;
    left: 43px;
    display: block;
    width: 30px;
    height: 15px;
    background-color: transparent;
    border-radius: 10px;
    transform: rotateZ(52deg);
    transition: 0.5s ease all;
}

button span:before, button span:after
{
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 45px;
    height: 15px;
    background-color: #4285f4;
    border-radius: 10px;
    transform: rotateZ(0);
    transition: 0.5s ease all;
}

</style>









    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="login.php">iCoder</a>
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

                <li class="nav-item dropdown ">
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
                 <li class="nav-item">
                    <a class="nav-link" href="contact.php" target="blank">Contact Us</a>
                </li>
                 <li class="nav-item active">
                    <a class="nav-link" href="login1.php" target="blank">Login</a>
                </li>


            </ul>
           <div class="search_phase">
  <form action="" method="POST" >
   
      <div class="col"><input type="text" placeholder="Search...." name="keywords" required=""></div>
      
      <div class="col">
        <button type="submit" name="keys_submit">
          <div id="search-circle"></div>
          <span></span>
        </button>
      
    </div>
  </form>
</div>
<?php   
$base="Techno Smarter"; // Change base here 
$search_URL="http://www.google.com/search?q="; // Google Search Query URL  
if(isset($_POST['keys_submit'])){ 
echo $keywords=$_POST['keywords'];
 header("location: ".$search_URL.$keywords.' '.$base );

}
?>

        </div>
    </nav>
    <div class="container my-4">
       <form>
            <div class="form-group">
              <div class="input-group-prepend">
                <span class="input-group-text">First name</span>
                <input type="text" aria-label="First name" class="form-control">
              </div>
              <div class="form-group my-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">Last name</span>
                  <input type="text" aria-label="First name" class="form-control">
                </div>
                <div class="form-group my-2">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Country</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">India</option>
                    <option value="2">United States of America</option>
                    <option value="3">Iceland</option>
                    <option value="3">Europe</option>
                    <option value="3">Italy</option>
                    <option value="3">Others</option>
                  </select>
                </div>
                <div class="form-group my-2">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="cexampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="cexampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Create an account</button>
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