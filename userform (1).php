<?php
include "connection.php";
// include "navbar1.php";
// include "background.php";
// $stid = oci_parse($conn, "select user_id,name from users_table where user_type='SUPERVISOR'");
// oci_execute($stid);
?>
 <!DOCTYPE html>
<html>
    <head>
        <title>form page</title>
    </head>
    <body> 
    <div class="container">
    <form class="row g-3 needs-validation" method="post" action="data.php"  novalidate>
      <div class="col-md-10">
        <div class="w-50 p-3" >
          <label for="validationCustomUsername" class="form-label">Username</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname" required>
          </div>
        </div>
          <div class="w-50 p-3" >
            <label for="validationCustom01" class="form-label" >Userid</label>
            <input type="text" class="form-control" id="validationCustom01" value="" name="uid" required>
          </div>
        <div class="w-50 p-3" >
          <label for="validationCustom02" class="form-label">password</label>
          <input type="password" class="form-control" id="validationCustom02" value="" name="pwd" required>
        </div>
      <div class="w-50 p-3" >
        <label for="validationCustom04" class="form-label">Usertype</label>
        <select class="form-select" id="utype" name="utype" required value="utype">
        <option selected disabled value="" >Choose...</option>
      <option>ADMIN</option>
      <option>STAFF</option>
      <option>FACULTY</option>
    </select>
  </div>
  <div class="w-50 p-3" id="shd">
    <label for="validationCustom06" class="form-label">Subject Handling</label>
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

