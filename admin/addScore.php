<?php
session_start();
if(isset($_POST['sub_id']) ){

    include 'db.php';
    $score = 0;
    $query  = "Select * FROM questions where q_sub_id = {$_POST['sub_id']} LIMIT 25";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){

            if($row['correctoption'] == $_POST[$row['q_id']]){
                $score +=1;
            }


          

        }
    }
    echo $score;

    $que = "SELECT * from scoretable where userName like '{$_SESSION['userName']}' AND subject = {$_POST['sub_id']} ";
    $res = mysqli_query($connection,$que);
    if(mysqli_num_rows($res) > 0){

        header( "Location: ../userpanel.php?AlreadySubmitted" );
    
    }else{

        $q = "Insert into scoretable(userName,userCity,subject,score) VALUES('{$_SESSION['userName']}','{$_SESSION['city']}',{$_POST['sub_id']},{$score}) ";
        $r = mysqli_query($connection,$q);
        header( "Location: ../userpanel.php?ScoreAdded" );
        $score = null;

    }

   
   


}else{
    header( "Location: ../userpanel.php" );
} ?>