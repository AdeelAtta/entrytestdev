<?php

if( isset($_POST['correctoption']) && isset($_POST['testNo'])){



$sub_id         =   $_POST['quizSubId'];
$question       =   $_POST['question'];
$option1        =   $_POST['option1'];
$option2        =   $_POST['option2'];
$option3        =   $_POST['option3'];
$option4        =   $_POST['option4'];
$correctoption  =   $_POST['correctoption'];
$testNo         =   $_POST['testNo'];

include 'db.php';

$query = "SELECT q_id FROM questions Where q_sub_id = $sub_id AND question LIKE '{$question}' AND correctoption LIKE '{$correctoption }'  ";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0 ){
        $sub_id = $question = $option1 =  $option2 = $option3  = $option4  = $correctoption = $testNo = null;
        header( "Location: ../adminpanel.php?addMcqs&quizAlreadyExist" );
    }else{
    $query = "INSERT INTO questions(question,option1,option2,option3,option4,correctoption,q_sub_id,testNo) VALUES('{$question}','{$option1}','{$option2}','{$option3}','{$option4}','{$correctoption}',{$sub_id},{$testNo})";
        if(mysqli_query($connection,$query)){
            $sub_id = $question = $option1 =  $option2 = $option3  = $option4  = $correctoption = $testNo =  null;
            header( "Location: ../adminpanel.php?addMcqs&quizAdded" );
        }else{
            echo mysqli_error($connection);
        }
    }










}else{
    header("Location: ../adminpanel.php?invalid");
}












?>