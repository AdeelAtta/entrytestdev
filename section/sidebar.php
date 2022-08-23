
<?php if(isset($_GET['s'])){
    $subject = $_GET['s'];
} 

if( isset($_GET['t'])){
  $topic   = $_GET['t'];
}

$scount = 0;
$tcount = 0;


include 'admin/db.php';
?>

<div class="col-md-4 col-xl-3 order-last order-md-first">
            <hr class="d-md-none">
            <aside class="sidebar sidebar-sticky sidebar-stick-shadow pr-md-5 br-1 "  style=" height:auto;">
              <ul class="nav nav-sidebar nav-sidebar-hero " data-accordion="true">
                

                <?php $query = "SELECT * FROM subject where sub_test_id = 1  ";
                      $result = mysqli_query($connection,$query);
                      if(mysqli_num_rows($result) > 0 ){
                        while($row = mysqli_fetch_array($result)){  $scount++;?>
                          
                        <li class="nav-item">
                          <a class="nav-link  <?php if((!$subject && $scount == 1)  or ($subject < 0 && $scount == 1) ){ echo "active"; }else if($subject ==  $row['sub_id']  ){echo "active"; } ?>  " href="#"><?php echo $row['sub_name']; ?><i class="nav-angle"></i></a>
                          <div class="nav"> 


                          <?php $q = "SELECT * FROM topic WHERE topic_sub_id = {$row['sub_id']} ";
                                $r = mysqli_query($connection,$q);
                                if(mysqli_num_rows($r) > 0){
                                  while($topic = mysqli_fetch_array($r)){  $tcount++ ?>
                                    <a class="nav-link <?php if((!$topic && $tcount == 1)  or ($topic < 0 && $tcount == 1) ){ echo "active"; }else if($topic ==  $row['topic_id']  ){echo "active"; } ?>" href="preparation.php?s=<?php echo $row['sub_id'];?>&t=<?php echo $topic['topic_name']; ?>"><?php echo $topic['topic_name']; ?></a>
                                <?php } } ?>
                          </div>
                      </li>

                      <?php  }  } ?>
              </ul>
            </aside>
          </div>