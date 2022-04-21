<!DOCTYPE html>
<html lang="en">
<head>
  <title>form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style media="screen">
#example1 {
  background: url(https://psewp.wpfuel.co.uk/wp-content/uploads/2021/05/Square_Pharmaceutical_123504209-rs2.jpeg) no-repeat center fixed;
   background-size: cover;
}
h2 {
  text-align: center;
}
</style>
<body id = example1><br><br><br><br>
<h2>Please fill up this form to get appointment</h2>
<div class="container">
 <form action="/action_page.php">
    <div class="form-group">
      <h4>Name:</h4>
      <input type="text" class="form-control"  name="name">
    </div>
    <div class="form-group">
      <h4>Age:</h4>
      <input type="number" class="form-control"  name="age">
    </div>
      <div class="form-group">
      <h4>Doctor's name:</h4>
      <input type="text" class="form-control"  name="dname">
    </div>
      <div class="form-group">
      <h4>Phone number:</h4>
      <input type="number" class="form-control"  name="number">
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
</div>

</body>
</html>
