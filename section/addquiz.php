<section class="section p-5 mt-10 text-center" >
        <div class="container">
<a class="btn btn-primary" href="adminpanel.php">Add Data </a>
<a class="btn btn-primary" href="adminpanel.php?update">Update Data </a>
<a class="btn btn-primary" href="adminpanel.php?students">Students </a>

      </div>
</section>

<?php 

if(isset($_GET['de']) && $_GET['de'] !== ''){

$qu = "DELETE FROM questions where q_id = {$_GET['de']} ";
$re = mysqli_query($connection,$qu);
header("Location: adminpanel.php?addMcqs&mcqDeleted#questions");

}

?>

      <!-- Add MCQS-->
      
      <section class="section p-5 mt-10 " >
        <div class="container">
          <form class="form-row "  action="admin/addquiz.php" method="POST" >
          <legend>Add Quiz</legend>
          <?php if(isset($_GET['quizAdded'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">Quiz added Successfully</div>
            </div>
          <?php }elseif(isset($_GET['quizAlreadyExist'])) {?> 
          <div class="col-12">
            <div class="alert alert-danger d-on-success">Quiz Already Exist</div>
          </div>
        <?php  } ?>
          <!-- Quiz -->
            
            <!-- UNI & test type -->
            <div class="form-group col-sm-6 col-xl-3">
            <select name="quizSubId" id="uni" class="form-control form-control-lg">
              <?php 
              $query = "Select * from university";
              $result = mysqli_query($connection,$query);
              while($row = mysqli_fetch_array($result)){
                $quer = "SELECT * FROM test WHERE test_uni_id = {$row['uni_id']} ";
                $res = mysqli_query($connection,$quer);
                while($test = mysqli_fetch_array($res)){ 
                  
                  $q = "SELECT * FROM subject WHERE sub_test_id = {$test['test_id']} " ;
                  $r = mysqli_query($connection,$q);
                  while($sub = mysqli_fetch_array($r)){  ?>
                 <option value="<?php echo $sub['sub_id']; ?>"><?php echo $sub['sub_name'].' '.$row['uni_short'].'('.$test['test_name'].')'; ?></option>
               <?php } } } ?>   
            </select>
            </div>


            <div class="form-group col-sm-6 col-xl-12">
              <input class="form-control form-control-lg" type="text" name="question" placeholder="Write Question">
            </div>
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="option1" placeholder="Option 1">
            </div>
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="option2" placeholder="Option 2">
            </div>
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="option3" placeholder="Option 3">
            </div>
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="option4" placeholder="Option 4">
            </div>
            <div class="form-group col-sm-6 col-xl-6">
              <input class="form-control form-control-lg" type="text" name="correctoption" placeholder="Correct Option">
            </div>
            <div class="form-group col-sm-6 col-xl-6">
              <input class="form-control form-control-lg" type="number" name="testNo" placeholder="Test No" value="1">
            </div>
           
           
            <div class="form-group col-sm-6 col-xl-12 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Add Quiz</button>
            </div>
       
          </form>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">
      <hr class="border border-primary border-2 opacity-50">





       <!-- users-->
      
       <section class="section p-5 mt-10 " >

<div class="container">
<h2 id="questions">Questions list</h2>
<p>Lists of Questions added:</p> 
<?php if(isset($_GET['mcqDeleted'])){ ?>   
<div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
        <div class="alert alert-danger">
            Question Deleted <strong>Successfully!</strong>
        </div>
      </div>  
      <?php }?>
      
<table class="table table-bordered">
<thead>
<tr>
  <th>Qno#</th>
  <th>Question</th>
  <th>Delete Account</th>
</tr>
</thead>
<tbody>

<?php 
$query = "SELECT * FROM questions order by q_id desc";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){
  $i=0;
  while($row = mysqli_fetch_array($result)){ ?>

          
<tr>
  <td><?php echo $row['q_id'];?></td>
  <td><?php echo $row['question'];?></td>
    <td><a class="btn btn-outline-danger" href="adminpanel.php?addMcqs&de=<?php echo $row['q_id'];?>">Delete</a></td>
</tr>


<?php    }
}

?>
</tbody>
</table>
</div>
</section>
<hr class="border border-primary border-2 opacity-50">