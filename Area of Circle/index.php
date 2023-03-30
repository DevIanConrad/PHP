<!DOCTYPE html> 
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<meta charset=utf-8 />
<title>Quiz&num;1</title>
<style>
body {
    margin:0; 
    padding:0; 
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
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #3b4d61;
    text-align: center;
    height:40px;
    max-height: 80px;
    margin:0 auto;
    overflow:hidden;
    } 

    .title{
        font-family: 'Montserrat';font-size: 50px;
        text-align: center;
        margin-top: 25px;
       
    }
    .contents{
        box-sizing: content-box;
        width: 50%;
        height: 100%;  
        border: 5px ridge #3b4d61;
        font-family: 'Montserrat';
        font-size: 50px;
        text-align: center;
        margin:0 auto;
        margin-top: 65px;
        

    }
    .content1{
        border: 0px solid black;
        font-family: 'Montserrat';
        font-size: 50px;
        text-align: center;
        margin-top: 70px;
        
    }

    </style>

<div class="header"></div>
<div class="title">
    Area of A Circle <br>
    <div style="font-size: 30px"> from </div>
     Radius 1 &hyphen; 5 <br>
     A&equals;&#960;r2
    </div>
    <div class="contents">
    <?php
    $r = 1;
    do{
    $Acircle = pi() * pow($r, 2);
    echo ("Radius of: " . $r . " = ");
    echo (number_format($Acircle, 2) . " or " . $Acircle . "<br>");
    $r++;
    }while($r <= 5)
    ?>
    </div>
<div class="contents content1"> 
    Ian Conrad B. Baarde <br>
    CEAT&hyphen;37&hyphen;503A </div>

<div class="footer"></div>

</head>
</body>

