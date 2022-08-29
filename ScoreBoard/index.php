<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>ScoreBoard - Tick 2 Top</title>

    <!-- Styles -->
    <link rel="stylesheet" href="styles.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
  </head>





<body>
<div style="text-align:center;" class="col-md-8 col-lg-7 col-xl-6">
      <a href="../index.php"><img  style="width:150px; height:150px; margin-top:20px; " src="../assets/img/favicon.png"  alt="tick2top logo"></a>
   
      <div class="divider d-flex align-items-center my-4">
            <h1 style="color:#E0668B;" class="text-center fw-bold mx-3 mb-0 text-muted">Score<strong style="color:#3D1462;">Board</strong></h1>
          </div>
      
    </div>
 

      <div class="container">
        <div class="row" >
            <br>
        <table style="margin: 30px auto; max-height:100px; overflow: scroll;">
            
            <thead>
                <tr>
                    <th ><strong>#</strong></th>
                    <th ><strong>Username</strong></th>
                    <th><strong>City</strong></th>
                    <th><strong>Marks</strong></th>
                </tr>
            </thead>
            <tbody>
                

                <?php 
                include '../admin/db.php';

                $query = "SELECT distinct(userName),userCity,total from scoretable order by total desc";
                $result = mysqli_query($connection,$query);
                if(mysqli_num_rows($result) > 0){
                    $i = 0;
                    while($row = mysqli_fetch_array($result)){                                       
                            ?>

<tr>                     <td ><strong><?php echo $i+=1;?></strong></td>
                         <td ><?php echo $row['userName'];?></td>
                         <td><?php echo $row['userCity'];?></td>
                         <td><?php echo $row['total'].' '.'/'.' '.'100'; ?></td>
                        </tr>

                      <?php   }  }


                        ?>

            </tbody>
        </table>
        </div>
    </div>
</body>
</html>