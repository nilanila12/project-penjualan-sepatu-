
<?php 
session_start();
require  'config/functions.php';



 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Toko Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="admin/font-awesome/css/font-awesome.css">
    <link rel="shortcut icon" href="icon.png">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <style>


      /* Page Title
      =================================================================== */

      #page-title-icon {
        background: #fff;
        height: 48px;
        width: 48px;
        -webkit-border-radius: 50em;
        -moz-border-radius: 50em;
        border-radius: 50em;
        padding: 4px;
        margin-left: -16px;
        margin-top: -18px;
        position: relative;
        z-index: 10;
        float: left;

      }

      #page-title-icon-inner {
        background: #ffd35f;
        height: 48px;
        width: 48px;
        -webkit-border-radius: 50em;
        -moz-border-radius: 50em;
        border-radius: 50em;
        margin-left: -52px;
        margin-top: -14px;
        position: relative;
        z-index: 30;
        float: left;
      }

      #page-title {
        background: url(img/bg-grey2.png);
        display: block;
        margin-top: 50px;
        margin-bottom: 25px;
        position: relative;
        z-index: 20;
        border-bottom: 5px solid #f6f6f6;
      }

      #page-title-inner {
        background: rgba(226, 151, 50, 0.9);
        -webkit-box-shadow: inset 0px 0px 5px rgba(0,0,0,.25);
        -moz-box-shadow: inset 0px 0px 5px rgba(0,0,0,.25);
        box-shadow: inset 0px 0px 5px rgba(0,0,0,.25);
        padding: 10px;
      }

      #page-title i {
        margin: -6px 2px -5px -18px;
        padding: 0px;
      }

      #page-title h2 {
        display: inline-block;
        font-family: "Boogaloo" !important;
        color: #fff;
        padding: 2px 20px 5px 20px;
        font-size: 30px;
      }

      #page-title span {
        color: #555;
      }


      /*go to top*/
      .to_top{
        display: inline-block;
        padding: 8px 12px;
        border: 1px solid #000;
        position: fixed;
        right: 10px;
        background-color: red;
        color: #fff;
        cursor: pointer;
        bottom: 10px;
        font-weight: bold;
      }
    
     /*FOOTER*/

     .newsletter-follow {
      text-align: center;
      margin-top: -20px;
      margin-left: -80px;
    }

     .newsletter-follow li {
      display: inline-block;
      margin-right: 5px;
    }

    .newsletter-follow li:last-child {
      margin-right: 0px;
    }

     .newsletter-follow li a {
      position: relative;
      display: block;
      width: 40px;
      height: 40px;
      line-height: 40px;
      border: 1px solid #15161D;
      background-color: #E4E7ED;
      -webkit-transition: 0.2s all;
      transition: 0.2s all;
    }


     .newsletter-follow li a:hover,  .newsletter-follow li a:focus {
      background-color: #15161D;
      color: #D10024;
    }

    </style>
 <body>
     <!-- navbar -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Toko Online</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sepatu<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="sepatu.php">Sepatu</a></li>
          </ul>
        </li>
        <li><a href="article.php">Testimoni</a></li>
      </ul>
      </li>
    </div>
    </nav>
  </head>
  <body>
  <!-- <link href="assets/css/style.css" rel="stylesheet">
<link href="assets/vendor/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox.css" rel="stylesheet">
  <nav class="navbar navbar-light bg-light">
     
    </nav> -->

    <div style="margin-top:20px;" class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 style="color:white;"class="title-a">
             SEPATU
              </h3>
              <p class="subtitle-a">
            Memberikan Informasi data Hardware
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
   <style>
   #button {
  float: center;
  margin-top:-20px ;
  background-color: #f44336;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
   }
   </style>


    <form action="" method="POST" >
   <center>
   <input type="submit" name="cpu1" id="button" value="SNEAKER">
   <input type="submit" id="button" name="cpu2" value="NIKE">
   <input type="submit" id="button" name="cpu3" value="ADIDAS">
   <input type="submit" id="button" name="cpu4" value="ASICS">
  
  <br>
  <br>
   
  <center>     
  </form>
  <?php
require 'oopsepatu1.php';


//input device
$infoip = new Sneakers(" SNEAKER ","diambil dari nama dewi yunani yaitu kemenangan " ,"branded terkenal","Beberapa contoh sepatu terkenal dunia");

// //input device
$infopd = new Nike(" NIKE","diambil dari nama dewi yunani yaitu kemenangan " ,"branded terkenal","Beberapa contoh sepatu terkenal dunia");


// //input device
$infood = new Adidas( " ADIDAS  ", "diambil dari nama dewi yunani yaitu kemenangan " ,"branded terkenal","Beberapa contoh sepatu terkenal dunia");

// //input device
$infosd = new Asics(" ASICS  ","diambil dari nama dewi yunani yaitu kemenangan " ,"branded terkenal","Beberapa contoh sepatu terkenal dunia");

//inpudevice
if (isset($_POST['cpu1'])) {
  if ($infoip->infoL() ==true) {

  }else{
    echo'<h1> Hasil Info</h1>';
    echo $infoip->lihatInfo();
    "<br/>";
    echo $infoip->Proses();
  }
}

//inpudevice
if (isset($_POST['cpu2'])) {
  if ($infopd->infoL() ==true) {

  }else{
    echo'<h1> Hasil Info</h1>';
    echo $infopd->lihatInfo();
    "<br/>";
    echo $infopd->Proses();
  }
}

//inpudevice
if (isset($_POST['cpu3'])) {
  if ($infood->infoL() ==true) {

  }else{
    echo'<h1> Hasil Info</h1>';
    echo $infood->lihatInfo();
    "<br/>";
    echo $infood->Proses();
  }
}

//inpudevice
if (isset($_POST['cpu4'])) {
  if ($infosd->infoL() ==true) {

  }else{
    echo'<h1> Hasil Info</h1>';
    echo $infosd->lihatInfo();
    "<br/>";
    echo $infosd->Proses();
  }
}


?>
  </body>