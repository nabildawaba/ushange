
<?php 


$servername = "localhost";
						$dbUsername = "ushaunxm_mon";
						$dbPassword = "Manager2015__";
						$dbname = "ushaunxm_exchange";
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

if(!$conn){
die("connection failed: ".mysqli_connect_error());
}


    if ($_SERVER["REQUEST_METHOD"] == "POST"){

      $name = $_POST['Exchangername'];
   
    $mode = $_POST['Exchangermode'];
	  $xml = $_POST['Exchangerxmllink'];

  
        
    }
else{
 header("location:./");
 exit();
}




$conn->close();

?>