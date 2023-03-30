<?php
include "connection.php";
include "ui.php"
// include "navbar1.php";
// include "background.php";
// $stid = oci_parse($conn, "select user_id,name from users_table where user_type='SUPERVISOR'");
// oci_execute($stid);
?>
 <!DOCTYPE html>
<html>
    <head>
        <title>form page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </head>
    <body> 
    <div class="container" style="box-shadow: 0 0 15px rgba(0, 0, 0, 10);height: 650px; width:10cm; margin-top:6cm;text-align: center; margin-left:16cm; backdrop-filter:blur(3px);">
    <!-- <form class="row g-3 " method="POST" action="verify.php" style="box-shadow: 0 0 10px rgba(0, 0, 0, 10);height: 350px; width:12cm; margin-top:4cm;text-align: center; margin-left:10cm; backdrop-filter:blur(3px);"> -->
  
  
    <form class="row g-6 needs-validation" method="post" action="data.php"  novalidate>
      <div class="col-md-16">
        <div class="w-55 p-3" >
          <label for="validationCustomUsername" class="form-label"style="color:White;">Username</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname" required>
          </div>
        </div>
          <div class="w-55 p-3" >
            <label for="validationCustom01" class="form-label" style="color:White;">Userid</label>
            <input type="text" class="form-control" id="validationCustom01" value="" name="uid" required>
          </div>
        <div class="w-55 p-3" >
          <label for="validationCustom02" class="form-label"style="color:White;">password</label>
          <input type="password" class="form-control" id="validationCustom02" value="" name="pwd" required>
        </div>
      <div class="w-55 p-3" >
        <label for="validationCustom04" class="form-label"style="color:White;">Usertype</label>
        <select class="form-select" id="utype" name="utype" required value="utype">
        <option selected disabled value="" >Choose...</option>
      <option>ADMIN</option>
      <option>STAFF</option>
      <option>FACULTY</option>
    </select>
  </div>
  <div class="w-55 p-3" id="shd">
    <label for="validationCustom06" class="form-label"style="color:White;">Subject Handling</label>
    <select class="form-select"  name="shd" required value="shd">
      <option selected disabled value=""  >Choose...</option>
      <option>BIOLOGY</option>
      <option>PHYSICS</option>
      <option>CHEMISTRY</option>
    </select>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
  </div>
</form>
</div> 
</form>
</body>
</html>
<script>
  const usertype=document.getElementById("utype");
  const subject_handling=document.getElementById("shd");
  usertype.addEventListener("change",function handleChange(event)
  {
    if(event.target.value==="FACULTY")
    {
        subject_handling.style.display="block";
    }
    else
    {
        subject_handling.style.display="none";
    }
  })

</script>

