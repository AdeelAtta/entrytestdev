<?php
if(isset($_POST['subName']) &&  isset($_POST['subTestId'])){


$subName  = $_POST['subName'];
$subTestId = $_POST['subTestId'];
include 'db.php';
$query  = "SELECT * FROM subject WHERE sub_name LIKE '%$subName%' AND  sub_test_id = $subTestId ";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){
    
    $subName =  $subTestId = null;
    header( "Location: ../adminpanel.php?subjectAlreadyExist" );
}else{

    $query = "INSERT INTO subject(sub_name,sub_test_id) VALUES('{$subName}',{$subTestId})";
    if(mysqli_query($connection,$query)){
        $subName =  $subTestId = null;
        header( "Location: ../adminpanel.php?subjectAdded" );
    }else{
        echo mysqli_error($connection);
    }

}



}else{
    header( "Location: ../adminpanel.php" );
} ?>