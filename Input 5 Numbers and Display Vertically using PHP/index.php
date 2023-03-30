<?php
session_start();
$NNEG = $_SESSION['NNEG'];
$NPOS = $_SESSION['NPOS'];
?>
<?php
    if(isset($_POST['end'])){
        unset($_SESSION['NNEG']);
        unset($_SESSION['NPOS']);
        unset($_SESSION['NO1']);
        unset($_SESSION['NO2']);
        unset($_SESSION['NO3']);
        unset($_SESSION['NO4']);
        unset($_SESSION['NO5']);
        

    }
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>

html,body{
    width: 100%;
    min-height: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    box-sizing:border-box;
    background-color: #6b7b8c;
}
       

.header {
    list-style-type: none;
    margin-bottom: 0px;
    padding: 0;
    overflow: hidden;
    height:40px;     
    background-color: #3b4d61;
    justify-content: space-between;
    }

.footer {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #3b4d61;
    text-align: center;
    height:40px;
    max-height: 80px;
    margin:0 auto;

    } 

    .form{
        font-family: 'Montserrat';font-size: 50px;
        margin-top: 7%;
        text-align: center;
    }
    .restart{
        margin-top: 50px;
        text-align: center;
    }

    .numbers{
        margin-top: 50px;
        text-align: center;
    }
    input[type=number]{
        font-family: 'Montserrat';font-size: 50px;
        width: 50px;
        padding: 20px 50px;
        margin-top: 50px;
       
    }

    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.button1{
    background-color: #3b4d61;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 5px;
    cursor: pointer;
    border-radius: 8px;
    transition-duration: 0.4s;
}
.button1:hover {
  background-color: #54779c;
  color: white;
}

.button2{
    background-color: #3b4d61;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 5px;
    cursor: pointer;
    border-radius: 8px;
    transition-duration: 0.4s;
}
.button2:hover {
  background-color: #54779c;
  color: white;
}

.button3{
    background-color: #3b4d61;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 5px;
    cursor: pointer;
    border-radius: 8px;
    transition-duration: 0.4s;
}
.button3:hover {
  background-color: #54779c;
  color: white;
}

.button4{
    background-color: #3b4d61;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 5px;
    cursor: pointer;
    border-radius: 8px;
    transition-duration: 0.4s;
}
.button4:hover {
  background-color: #54779c;
  color: white;
}

.button5{
    background-color: #3b4d61;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 5px;
    cursor: pointer;
    border-radius: 8px;
    transition-duration: 0.4s;
}
.button5:hover {
  background-color: #54779c;
  color: white;
}

.restartbtn{
    background-color: #3b4d61;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 5px;
    cursor: pointer;
    border-radius: 8px;
    transition-duration: 0.4s;
}
.restartbtn:hover {
  background-color: #54779c;
  color: white;
}

.dev{
    padding-bottom: 123px;
    font-family: 'Montserrat';
        font-size: 50px;
        text-align: center;
        margin-top: 70px;
}
    </style>
</head>
<body> 

<div class="header"></div>

<div class="form">
<form method="post" name="myForm">  
Enter the Value of NO: <br>  
<input type="number" name="NO" size="50"><br><br>  

<button class="button1" type="submit" name="submit1" >NO1</button> 

<button class="button2" type="submit" name="submit2">NO2</button>

<button class="button3" type="submit" name="submit3">NO3</button>

<button class="button4" type="submit" name="submit4">NO4</button>

<button class="button5" type="submit" name="submit5">NO5</button>

</form>
</div>



<?php  
session_start();
$NO = $_POST['NO'];

if(isset($_POST['submit1'])){
    session_start();
    $_SESSION['NO1'] = $NO;
    if($_SESSION['NO1'] == null){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("NO1 is null, please insert a value")';  
        echo '</script>';
        unset($_SESSION['NO1']);
    }
}
if(isset($_POST['submit2'])){
    session_start();
    $_SESSION['NO2'] = $NO;
    if($_SESSION['NO2'] == null){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("NO2 is null, please insert a value")';  
        echo '</script>';
        unset($_SESSION['NO2']);
    }
}
if(isset($_POST['submit3'])){
    session_start();
    $_SESSION['NO3'] = $NO;
    if($_SESSION['NO3'] == null){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("NO3 is null, please insert a value")';  
        echo '</script>';
        unset($_SESSION['NO3']);
    }
}
if(isset($_POST['submit4'])){
    session_start();
    $_SESSION['NO4'] = $NO;
    if($_SESSION['NO4'] == null){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("NO4 is null, please insert a value")';  
        echo '</script>';
        unset($_SESSION['NO4']);
    }
}
if(isset($_POST['submit5'])){
    session_start();
    $_SESSION['NO5'] = $NO;
    if($_SESSION['NO5'] == null){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("NO5 is null, please insert a value")';  
        echo '</script>';
        unset($_SESSION['NO5']);
    }
}


if(isset($_POST['submit1']) || isset($_POST['submit2']) || isset($_POST['submit3']) || isset($_POST['submit4']) || isset($_POST['submit5']))  
{  
    if($NO<0){
        session_start();
        $NNEG = $_SESSION['NNEG']++;
        
    }}
        
    if(isset($_POST['submit1']) || isset($_POST['submit2']) || isset($_POST['submit3']) || isset($_POST['submit4']) || isset($_POST['submit5'])){ 
    if($NO>0){
    $NPOS = $_SESSION['NPOS']++;
    
   
}}

if ($_SESSION['NNEG'] == 1 && $_SESSION['NPOS'] == 4  ){
    $NVAL = $_SESSION['NNEG'] + $_SESSION['NPOS'];
}
if ($_SESSION['NNEG'] == 4 && $_SESSION['NPOS'] == 1  ){
    $NVAL = $_SESSION['NNEG'] + $_SESSION['NPOS'];
}
if ($_SESSION['NNEG'] == 3 && $_SESSION['NPOS'] == 2  ){
    $NVAL = $_SESSION['NNEG'] + $_SESSION['NPOS'];
}
if ($_SESSION['NNEG'] == 2 && $_SESSION['NPOS'] == 3  ){
    $NVAL = $_SESSION['NNEG'] + $_SESSION['NPOS'];
}
if ($_SESSION['NNEG'] == 0 && $_SESSION['NPOS'] == 5  ){
    $NVAL = $_SESSION['NNEG'] + $_SESSION['NPOS'];
}
if ($_SESSION['NNEG'] == 5 && $_SESSION['NPOS'] == 0  ){
    $NVAL = $_SESSION['NNEG'] + $_SESSION['NPOS'];
}
if ($_SESSION['NNEG'] >5 || $_SESSION['NPOS'] >5   ){
    unset($_SESSION['NNEG']);
    unset($_SESSION['NPOS']);
    unset($_SESSION['NO1']);
    unset($_SESSION['NO2']);
    unset($_SESSION['NO3']);
    unset($_SESSION['NO4']);
    unset($_SESSION['NO5']);
    unset($NVAL);
    echo '<script type ="text/JavaScript">';  
    echo 'alert("ERROR: $NVAL is more than 5")';  
    echo '</script>';  
    
}

echo ('<div class="numbers">');
if($NVAL == 5){
    echo ("Input numbers: <br>");
    echo ($_SESSION['NO1']); 
    echo ("<br>");
    echo ($_SESSION['NO2']); 
    echo ("<br>");
    echo ($_SESSION['NO3']); 
    echo ("<br>");
    echo ($_SESSION['NO4']); 
    echo ("<br>");
    echo ($_SESSION['NO5']); 
    echo ("<br>");
}
echo ('</div>');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
  

    
    






?>

<div class="restart">
<form action="quiz2.php" method="post">
<input  type="submit" name="end" class="restartbtn" value="restart">

</form>

<div class="dev"> 
    Ian Conrad B. Baarde <br>
    CEAT&hyphen;37&hyphen;503A </div>

</div>

<section class="footer">
<div class="footer"></div>
</section>

</body>
</html> 

