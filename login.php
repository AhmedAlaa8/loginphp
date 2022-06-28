<?php 

    session_start();

if (isset($_SESSION['email'])) {

   header('location: ./index.php');

}



?>

<?php include "./layouts/heder.php" ?>

<div class="container asas" style="margin-top: 10em;margin-left: 29%;border: rgb(57, 54, 236) dotted 2px;width: 35%;padding:50px" >

<form action='./control/login1.php'  method='post'>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>

        <div class="col-sm-10">
        <input type="email" name="email" class="form-control" style="width: 90%;">
        </div>

  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>

        <div class="col-sm-10">
        <input type="password" name="password" class="form-control" style="width: 90%;" >
        </div>

  </div>
 
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">genre</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
        male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          female
        </label>
      </div>
     
    </div>
  </fieldset>
  
  <button type="submit" class="btn btn-primary">Sign in</button>


</div>

<?php include "./layouts/footer.php" ?>
