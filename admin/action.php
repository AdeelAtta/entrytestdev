<?php 
include 'db.php';
if(isset($_POST['email']) && isset($_POST['password'])){


    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    
    $query = "SELECT * FROM amn WHERE email = '$email' AND status = 'active' ";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0 ){
        while($row = mysqli_fetch_array($result)){
            if($password == $row['password'] && $row['auth'] == 'admin'){

                    session_start();
 
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['city'] = $row['city'];

                    $_SESSION['auth']  = $row['auth'];
                    header("Location: ../adminpanel.php");
            }else if($password == $row['password'] ){
               
                session_start();

                $_SESSION['email'] = $row['email'];
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['city'] = $row['city'];
                $_SESSION['auth']  = $row['auth'];
                header("Location: ../adminpanel.php?user");


            }else{
                echo "<script>location.href='../login.php?invalid'</script>";
            }
        }



    }else{

        echo "<script>location.href='../login.php?invalid'</script>";
    }



}else{

    echo "<script>location.href='../login.php'</script>";
}












?>