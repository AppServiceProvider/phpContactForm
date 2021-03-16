<?php
$host = "localhost";
$databasebUser= "roman_user_account";
$databasePwd="123";
$dataBaseName= "roman_official_database";
$connect=mysqli_connect($host,$databasebUser,$databasePwd,$dataBaseName);

if($connect==true){
//      echo "connected";
}else{
    echo" not connected";
};

 $myQuery = "SELECT fname,lname,email,comment FROM roman_data_table";
 $runQuery= mysqli_query($connect, $myQuery);

// print_r($runQuery);

// while($myData= mysqli_fetch_array($runQuery)){
//   echo $myData["$fname"]." ".$myData["$lname"]." ".$myData["$email"];
//}; 


?>
