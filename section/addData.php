<section class="section p-5 mt-10 text-center" >
        <div class="container">
<a class="btn btn-primary" href="adminpanel.php?update">Update Data </a>
<a class="btn btn-primary" href="adminpanel.php?addMcqs">Add Quiz </a>
<a class="btn btn-primary" href="adminpanel.php?students">Students </a>

      </div>
</section>


      <!-- Add University -->
      
      <section class="section p-5 mt-10 " >
        <div class="container">
          <form class="form-row "  action="admin/adduniversity.php" method="POST" enctype="multipart/form-data">
          <legend>Add University</legend>
          <?php if(isset($_GET['uniadded'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">University added Successfully</div>
            </div>
          <?php }elseif(isset($_GET['uniAlreadyExist'])) {?> 
          <div class="col-12">
            <div class="alert alert-danger d-on-success">University Already Exist</div>
          </div>
        <?php  } ?>
          <!-- University name -->
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="uniName" placeholder="University Name">
            </div>
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="uniShort" placeholder="Short Name">
            </div>
           
            <div class="form-group col-sm-6 col-xl-3 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Add University</button>
            </div>
       
          </form>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">

    
      <!-- Add Tests -->
      <section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="admin/addtest.php" method="POST" enctype="multipart/form-data">
          <legend>Add Tests</legend> 
          <?php if(isset($_GET['testAdded'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">Test added Successfully</div>
            </div>
          <?php }elseif(isset($_GET['testAlreadyExist'])) {?> 
          <div class="col-12">
            <div class="alert alert-danger d-on-success">Test Already Exist</div>
          </div>
        <?php  } ?>


          <!-- Test Name -->
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="testName" placeholder="Test Name">
            </div>
            <div class="form-group col-sm-6 col-xl-3">
            <select name="testUniId" id="" class="form-control form-control-lg">
              <?php 
              $query = "Select * from university";
              $result = mysqli_query($connection,$query);
              while($row = mysqli_fetch_array($result)){ ?>
               <option value="<?php echo $row['uni_id']; ?>"><?php echo $row['uni_name']; ?></option>
              <?php  } ?>   
            </select>
            </div>
           
            <div class="form-group col-sm-6 col-xl-3 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Add Tests</button>
            </div>
          </form>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">


      <!-- Add Subject -->
      <section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="admin/addsubject.php" method="POST" enctype="multipart/form-data">
          <legend>Add Subject</legend> 
          <?php if(isset($_GET['subjectAdded'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">Subject Added Successfully</div>
            </div>
          <?php }elseif(isset($_GET['subjectAlreadyExist'])) {?> 
          <div class="col-12">
            <div class="alert alert-danger d-on-success">Subject Already Exist</div>
          </div>
        <?php  } ?>


          <!-- Subject Name -->
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="subName" placeholder="Subject Name">
            </div>

            <!-- UNI & test type -->
            <div class="form-group col-sm-6 col-xl-3">
            <select name="subTestId" id="uni" class="form-control form-control-lg">
              <?php 
              $query = "Select * from university";
              $result = mysqli_query($connection,$query);
              while($row = mysqli_fetch_array($result)){
                $quer = "SELECT * FROM test WHERE test_uni_id = {$row['uni_id']} ";
                $res = mysqli_query($connection,$quer);
                while($test = mysqli_fetch_array($res)){ ?>
                 <option value="<?php echo $test['test_id']; ?>"><?php echo $row['uni_name'].'('.$test['test_name'].')'; ?></option>
               <?php } } ?>   
            </select>
            </div>


           
            <div class="form-group col-sm-6 col-xl-3 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Add Subject</button>
            </div>
          </form>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">
      
      
       <!-- Add Topic/Article -->
      <section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="admin/addtopic.php" method="POST" >
          <legend>Add Topic</legend> 
          <?php if(isset($_GET['topicAdded'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">Topic Added Successfully</div>
            </div>
          <?php }elseif(isset($_GET['topicAlreadyExist'])) {?> 
          <div class="col-12">
            <div class="alert alert-danger d-on-success">Topic Already Exist</div>
          </div>
        <?php  } ?>


          <!-- Topic Name -->
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="topicName" placeholder="Topic Name">
            </div>

            <!-- UNI & test type -->
            <div class="form-group col-sm-6 col-xl-3">
            <select name="topicSubId" id="uni" class="form-control form-control-lg">
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


            <div class="form-group col-12">
              <textarea id="Article_editor" class="form-control form-control-lg" rows="4" placeholder="Message" name="topicData"></textarea>
            </div>



           
            <div class="col-12 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">ADD Topic</button>
            </div>
          </form>

          <script src="ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('Article_editor');
        </script>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">


       <!-- Add MCQs -->
       <section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="admin/addmcqs.php" method="POST" >
          <legend>Add MCQs</legend> 
          <?php if(isset($_GET['McqsAdded'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">MCQsss Added Successfully</div>
            </div>
          <?php }elseif(isset($_GET['mcqsAlreadyExist'])) {?> 
          <div class="col-12">
            <div class="alert alert-danger d-on-success">MCQs Already Exist</div>
          </div>
        <?php  } ?>


            <!-- UNI & test type -->
            <div class="form-group col-sm-6 col-xl-3">
            <select name="mcqbagSubId" id="uni" class="form-control form-control-lg">
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


            <div class="form-group col-12">
              <textarea id="editor" class="form-control form-control-lg" rows="4" placeholder="Message" name="mcqbagData"></textarea>
            </div>



           
            <div class="col-12 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">ADD MCQs</button>
            </div>
          </form>

          <script src="ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('editor');
        </script>
        </div>
      </section>
