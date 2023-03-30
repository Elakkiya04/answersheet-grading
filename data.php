<?php
session_start();
include "connection.php";
if(isset($_POST['submit']))
{   
    $uname=$_POST['uname'];
    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];
    $utype=$_POST['utype'];
    $shd=$_POST['shd'];
    $stid1 = oci_parse($conn, "select count(USER_ID) as cnt from login_table where  USER_ID='$uid'");
    oci_execute($stid1 );
    while ($row = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS))
    {
      if($row['CNT']==0)
      {
        $stid = oci_parse($conn, "INSERT INTO login_table (USER_ID,PASSWORD,NAME,USER_TYPE,SUBJECT) values('$uid','$pwd','$uname','$utype','$shd')");
        oci_execute($stid);
        echo "<script> alert ('Your form has been successfully submitted!')
        window.location.href='userform.php' </script> ";   
      }
      else
      {
        echo "<script> alert ('Entered user_id is already exists, Please enter unique user_id!')
        window.location.href='userform.php' </script> ";   

      }
    }
   oci_close($conn);
}
?>