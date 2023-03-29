<?php
session_start();
if(isset($_POST['login']))
{   
   $conn = oci_connect("C##IDCARD", "123", "localhost:1521/ORCL");
   if (!$conn) 
   {
      $m = oci_error();
      echo $m['message'], "\n";
      exit;
   }
   else 
   {

      $stid = oci_parse($conn, 'SELECT name,user_id,password,user_type FROM login_table ');
      oci_execute($stid);
      print_r($stid);
      while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) 
      { 
         if($_POST['uid']==$row['USER_ID'] && $_POST['pwd']==$row['PASSWORD'])
         {  
            $_SESSION['uname']=$row['NAME'];
            $_SESSION['utype']=$row['USER_TYPE'];
            $_SESSION['uid']=$row['USER_ID'];
            $uname=$_SESSION['uname'];
            
            if($row['USER_TYPE']=='ADMIN')
            {
               header("Location: adminhomepage.php");
            }
            elseif($row['USER_TYPE']=='STAFF')
            {
               header("Location: staffhomepage.php");
            }
            else
            {
               header("Location: facultyhomepage.php"); 
            }
         }         
      }    
      echo "<script> alert('Please enter the valid Username and Password!')
      window.location.href='index.php'</script>";
   }
   oci_close($conn);
}
?>
</form>
