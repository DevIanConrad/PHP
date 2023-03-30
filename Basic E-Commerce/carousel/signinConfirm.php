<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }}
    

    *FOOTER CSS*/

.b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.bi {
  vertical-align: -.125em;
  fill: currentColor;
}

.footerbg{
  background-color: #1f2021;
  position: fixed;
    bottom: 0;
    width: 100%;
}
.col{
  color:white;
}

</style>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img class="bi me-2" width="75" height="45" role="img" aria-label="Bootstrap" src="salsquared.png">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
              <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>
    
            <div class="text-end">
                <a href="index.html">
                <button type="button" class="btn btn-outline-light me-2" href="signin.html">Logout</button>
                </a>
              </div>
          </div>
        </div>
      </header>
      <link href="register.css" rel="stylesheet">
</head>
<body>
<?php 

$host="localhost";
$user="root";
$password="";
$db="salsquared";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['email'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from registration where email='".$email."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql) or die(mysql_error());
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
       
    }
    else{
        echo " You Have Entered Incorrect Password";
       
    }
        
}
?>



<div class="footerbg">

<div class="container">
  <footer class="row row-cols-5 py-5 my-5">
    <div class="col">
    <a href="index.html" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <img class="bi me-2" width="100" height="65" src="salsquared.png" style="margin-left:-25px;">
      </a>
      <p class="text-muted">&copy; 2021</p>
    </div>

    <div class="col">

    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>
  </footer>
</div>
</div>


  <!-- FOOTER -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>









</body>
</html>
   