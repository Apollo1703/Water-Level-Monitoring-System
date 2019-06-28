<?php
    include('koneksi.php'); //bootstrap koneksi.php to add.php
 if(isset($_GET(['tinggi_air'])) //check if "tinggi_air" element of the db exist
 {
	 $sensor = $_GET['tinggi_air']; //$_GET protocol is used to get the value of tinggi air
 }
    $sensor = $_GET['tinggi_air'];
 
    $sql = "INSERT INTO tbl_water (tinggi_air) VALUES (:tinggi_air)"; //enter data from arduino to the query with this $sql
 
    $stmt = $PDO->prepare($sql); //start prepare->bindParam->execute protocol
 
    $stmt->bindParam(':tinggi_air', $sensor);
 
    if($stmt->execute()) {  //check if bindParam() function is called succesfully
        echo "sukses gaes";
    }else{
        echo "gagal gaes";
    }
?>
 
