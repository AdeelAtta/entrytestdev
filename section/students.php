<section class="section p-5 mt-10 text-center" >
        <div class="container">
<a class="btn btn-primary" href="adminpanel.php">Add Data </a>
<a class="btn btn-primary" href="adminpanel.php?update">Update Data </a>
<a class="btn btn-primary" href="adminpanel.php?addMcqs">Add Quiz </a>

      </div>
</section>



<?php if(isset($_GET['u']) && isset($_GET['s'])){

$q = "update amn SET status = '{$_GET['s']}' where email = '{$_GET['u']}' ";
$r = mysqli_query($connection,$q);



}?>




      <!-- users-->
      
      <section class="section p-5 mt-10 " >

      <div class="container">
  <h2>Students Table</h2>
  <p>Lists of Accounts Created:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>UserName</th>
        <th>Email</th>
        <th>City</th>
        <th>Action/status</th>
        <th>Delete Account</th>
      </tr>
    </thead>
    <tbody>

    <?php 
    $query = "SELECT * FROM amn where auth like 'user' order by status";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){ ?>

                
      <tr>
        <td><?php echo $row['userName'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['city'];?></td>
        <?php if($row['status'] == 'active' ){
            echo "<td><a class='btn btn-outline-warning' href='adminpanel.php?students&s=disable&u={$row['email']}'>Disable Now</a></td>";
        }else{
            echo "<td><a class='btn btn-outline-success' href='adminpanel.php?students&s=active&u={$row['email']}'>Active Now</a></td>";
        } ?> 
          <td><a class="btn btn-outline-danger">Delete</a></td>
      </tr>




    <?php    }
    }
    
    ?>
    </tbody>
  </table>
</div>
      </section>
      <hr class="border border-primary border-2 opacity-50">