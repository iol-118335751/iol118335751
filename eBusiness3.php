<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="css/eBusiness1.css" type="text/css" />
    </head>
    <body>
    <!-- //Starting the session to get the session variable from last page-->
    <h1> Purchase Receipt </h1>
 <?php
 
 session_start () ;
 @$totalValue2 = $_POST ['txtTotal'];
 @$fullNameValue= $_POST ['txtName'];
 @$Email = $_POST ['txtNum'];
 echo "The name is : ".$fullNameValue.".";
 echo "<br></br>";
 echo "Phone Number is: ".$Email.".";
 echo "<br></br>";
 echo "The total value is : €".$totalValue2."";
 ?>
    </body>
</html>