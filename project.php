<?php
if (isset($_POST["user"])) {
  headeer("location:dashboard.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <style>
#example1 {
  background: url(https://www.pilotpartners.com.au/wp-content/uploads/2019/08/iStock-1001713236-medical-plain.jpg) no-repeat center fixed;
   background-size: cover;

}
h1 {
  text-align: left;
  font-family: "Sofia", sans-serif;
  font-weight: bold;
  color: black;
}
h3 {
   font-family: "Times New Roman", Times, serif;
   font-weight: bold;
   color: black;
   }
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 62px;
  text-align: center;
  display: inline-block;
  font-size: 20px;
  font-weight: bold;
  font-family: "Times New Roman", Times, serif;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 4px;
  align: center;
}
.button1 {
  background-color: lime;
  color: black;
}
.button1:hover {
  background-color:deepskyblue;
  color: black;
}
.button2 {
  background-color: red ;
  color: black;
}

.button2:hover {
  background-color:magenta ;
  color: black;
}
</style>
</head>
<body id="example1">
<div class="row">
  <div class="col-sm-12">
  <h1><br><br><br><br>Welcome to doctor 24/7.com. All specialized doctors are available here in 24/7</h1>
  <h3>If you are a normal user, then press "Get started" and if you are an admin
    then press "Admin login"</h3>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
  <<?php
   if (isset($_GET["user"])) {
       header("location:dashboard.php");
       }
   ?>
 <form action="dashboard.php" method="post">
       <input type="submit" button class="button button1" name="user" value="Get started">
       <button class="button button2">Admin login</button>
 </form>
</div>
</div>
</body>
</html>
