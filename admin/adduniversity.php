<?php 
if(isset($_POST['uniName']) && isset($_POST['uniShort'])){


include 'db.php';
$uniName  = $_POST['uniName'];
$uniShort = strtoupper($_POST['uniShort']);
$query = "Select uni_name from university where uni_name LIKE '%$uniName%' or uni_short LIKE '%$uniShort%'";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){
    $uniName = $uniShort = null;
    header( "Location: ../adminpanel.php?uniAlreadyExist" );
}else{ 

$query = "INSERT INTO university(uni_name, uni_short) VALUES('{$uniName}','{$uniShort}')";
if(mysqli_query($connection,$query)){
    
    header( "Location: ../adminpanel.php?uniadded" );
}else{
    echo mysqli_error($connection);
}
}




}else{
    header( "Location: ../adminpanel.php" );
}

?>