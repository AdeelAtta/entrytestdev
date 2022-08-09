<?php
if(isset($_POST['subName']) && isset($_POST['subUniId']) &&  isset($_POST['subTestId'])){


$subName  = $_POST['subName'];
$subUniId = $_POST['subUniId'];
$subTestId = $_POST['subTestId'];
include 'db.php';
$query  = "SELECT * FROM subject WHERE sub_name LIKE '%$subName%' AND sub_uni_Id = $subUniId AND sub_test_id = $subTestId ";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){
    $subName = $subUniId = $subTestId = null;
    header( "Location: ../adminpanel.php?subjectAlreadyExist" );

}else{

    $query = "INSERT INTO subject(sub_name,sub_uni_id,sub_test_id) VALUES('{$subName}',{$subUniId},{$subTestId})";
    if(mysqli_query($connection,$query)){
        $subName = $subUniId = $subTestId = null;
        header( "Location: ../adminpanel.php?subjectAdded" );
    }else{
        echo mysqli_error($connection);
    }

}



}else{
    header( "Location: ../adminpanel.php?aaa" );
} ?>