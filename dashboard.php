<!DOCTYPE html>
<html lang="en">
<head>
  <title>dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <style>
  .container {
    position: relative;
    width: 100%;
    max-width: 400px;
  }
  .container .btn {
  position: absolute;
  top: 94%;
  left: 49%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:#8B008B;
  color: white;
  font-size: 16px;
  padding: 13px 120px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
  .container1 {
    position: relative;
    width: 100%;
    max-width: 400px;
  }
  .container1 .btn {
  position: absolute;
  top: 94%;
  left: 44.5%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #FF0000;
  color: white;
  font-size: 16px;
  padding: 13px 97px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
  .container2 {
    position: relative;
    width: 100%;
    max-width: 400px;
  }
  .container2 .btn {
  position: absolute;
  top: 94%;
  left: 44.5%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #0000FF;
  color: white;
  font-size: 16px;
  padding: 13px 115px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
  .container3 {
    position: relative;
    width: 100%;
    max-width: 400px;
  }
  .container3 .btn {
  position: absolute;
  top: 94%;
  left: 47%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #FF1493;
  color: white;
  font-size: 16px;
  padding: 13px 139px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
  .container4 {
    position: relative;
    width: 100%;
    max-width: 400px;
  }
  .container4 .btn {
  position: absolute;
  top: 94%;
  left: 44.9%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #008000;
  color: white;
  font-size: 16px;
  padding: 13px 122px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
  .container5 {
    position: relative;
    width: 100%;
    max-width: 400px;
  }
  .container5 .btn {
  position: absolute;
  top: 94%;
  left: 44.5%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #FF4500;
  color: white;
  font-size: 16px;
  padding: 13px 119px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
  #font{
    font-family:Garamond, serif;
    font-size: 50px;
    color: black;
    font-weight: bold;
}
  }
  </style>
  </head>
  <body><br><br>
<div class="row">
  <div class="col-sm-4">
      <img src="https://op-bozorgmehr.ir/wp-content/uploads/2021/06/unnamed-1.jpg%D8%B2%D8%B1%D8%B2%D8%B1-1.jpg" height="500px" width="350px">
  </div>
  <div class="col-sm-8">
  <p id="font">Thanks for using our service. We are providing the details informations of the best specialized doctors all over the country.What kind of specialized doctor do you need? </p>
  </div>
</div><br><br><br><br>
<div class="row">
  <div class="col-sm-4">
  <div class="container">
    <img src="https://human.biodigital.com/health/blood-heart-and-circulation/breathing-with-beating-heart/breathing-with-beating-heart.jpg" height="313px" width="315px">
    <?php
     if (isset($_GET["user"])) {
         header("location:doctor1.php");
         }
     ?>
   <form action="doctor1.php" method="post">
   <input type="submit" button class="btn" name="user" value="Cardiology">
   </form>
  </div>
</div>
  <div class="col-sm-4">
  <div class="container1">
    <img src="https://static.turbosquid.com/Preview/2014/07/08__03_03_55/Digestive_01.jpgf28d6306-b7ea-4c7a-b5a3-78aef7c67ec3Zoom.jpg"  height="315px" width="315px">
    <?php
     if (isset($_GET["user"])) {
         header("location:doctor2.php");
         }
     ?>
   <form action="doctor2.php" method="post">
   <input type="submit" button class="btn" name="user" value="Gastroenterology">
   </form>
  </div>
</div>
<div class="col-sm-4">
<div class="container2">
  <img src="https://media.sciencephoto.com/image/f0074422/800wm/F0074422-Human_leg_bones,_artwork.jpg"  height="315px" width="315px">
  <?php
   if (isset($_GET["user"])) {
       header("location:doctor3.php");
       }
   ?>
 <form action="doctor3.php" method="post">
 <input type="submit" button class="btn" name="user" value="Orthopedics">
 </form>
</div>
</div>
</div><br><br><br>
<div class="row">
  <div class="col-sm-4">
  <div class="container3">
    <img src=" https://www.medillsb.com/images/artistimages/images/13486_269231.jpg" height="315px" width="329px">
    <?php
     if (isset($_GET["user"])) {
         header("location:doctor4.php");
         }
     ?>
   <form action="doctor4.php" method="post">
   <input type="submit" button class="btn" name="user" value="Urology">
   </form>
  </div>
</div>
  <div class="col-sm-4">
  <div class="container4">
    <img src=" https://media.sciencephoto.com/image/f0101847/800wm/F0101847-Human_brain_and_spinal_cord,_artwork.jpg"  height="315px" width="315px">
    <?php
     if (isset($_GET["user"])) {
         header("location:doctor5.php");
         }
     ?>
   <form action="doctor5.php" method="post">
   <input type="submit" button class="btn" name="user" value="Neurology">
   </form>
  </div>
</div>
<div class="col-sm-4">
<div class="container5">
  <img src="https://images.fineartamerica.com/images-medium-large-5/44-human-skin-anatomy-pixologicstudioscience-photo-library.jpg"  height="315px" width="315px">
  <?php
   if (isset($_GET["user"])) {
       header("location:doctor6.php");
       }
   ?>
 <form action="doctor6.php" method="post">
 <input type="submit" button class="btn" name="user" value="Dermatology">
 </form>
</div>
</div>
</div><br><br><br><br>
<div class="row">
  <div class="col-sm-12">
  <p id="font">Enjoy some interactive videoes about some medical procedure and physical disorders</p>
  </div>
</div><br><br><br>
<div class="row">
  <div class="col-sm-4">
 <iframe width="360" height="260" src="https://www.youtube.com/embed/9MFAnrOFXbg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="col-sm-4">
 <iframe width="360" height="260" src="https://www.youtube.com/embed/Bb8bnjnEM00" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="col-sm-4">
 <iframe width="360" height="260" src="https://www.youtube.com/embed/4f6WOib_pnw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div><br>
<div class="row">
<div class="col-sm-4">
 <iframe width="360" height="260" src="https://www.youtube.com/embed/GyiobIq4fnk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-sm-4">
<iframe width="360" height="260" src="https://www.youtube.com/embed/QllguanpKic" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-sm-4">
<iframe width="360" height="260" src="https://www.youtube.com/embed/fELn4Fe9Ccc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div><br>
<div class="row">
 <div class="col-sm-4">
  <iframe width="360" height="260" src="https://www.youtube.com/embed/Jxb8RVrgjQo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </div>
 <div class="col-sm-4">
 <iframe width="360" height="260" src="https://www.youtube.com/embed/l80XcT8BlXI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </div>
 <div class="col-sm-4">
 <iframe width="360" height="260" src="https://www.youtube.com/embed/RiKu9sgFizY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </div>
</div><br><br>
</body>
</html>
