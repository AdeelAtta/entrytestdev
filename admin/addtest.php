<?php
if(isset($_POST['testName']) && isset($_POST['testUniId'])){


$testName  = strtoupper($_POST['testName']);
$testUniId = $_POST['testUniId'];
include 'db.php';
$query  = "SELECT * FROM test WHERE test_name LIKE '%$testName%' AND test_uni_Id = $testUniId ";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){
    $testName = $testUniId = null;
    header( "Location: ../adminpanel.php?testAlreadyExist" );

}else{

    $query = "INSERT INTO test(test_name,test_uni_id) VALUES('{$testName}',$testUniId)";
    if(mysqli_query($connection,$query)){
        $testName = $testUniId = null;
        header( "Location: ../adminpanel.php?testAdded" );
    }else{
        echo mysqli_error($connection);
    }

}



}else{
    header( "Location: ../adminpanel.php" );
} ?>