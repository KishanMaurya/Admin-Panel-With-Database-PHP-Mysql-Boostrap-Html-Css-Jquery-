<?php
$con=mysqli_connect('localhost','root','','north');
if (isset($_POST['review'])) {
    
    $name=$_POST['name'];
    $review=$_POST['review'];

    if ($name == '') {
       ?>
        <script>
          alert('This fields is blank ')
        </script>
      <?php
    }
    if ($review == '') {
       ?>
        <script>
          alert('This fields is blank ')
        </script>
      <?php
    }

    $Query="INSERT INTO reviews (name, postdescription ) VALUES ('$name','$review') ";
    $run=mysqli_query($con,$Query);
    if ($run > 0) {
      ?>
        <script>
          alert('Insert Successfull ...!')
        </script>
      <?php
    }
    else{
      ?>
        <script>
          alert('Error  !')
        </script>
      <?php    
    }
  }
?>

<?php include 'header.php'; ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">

                                            <div class="col-sm-12">
                                                <div class="card shadow-lg">
                                                  <div class="card-header bg-primary">
                                                    <div class="title">
                                                      <h5 class="text-white">Review :</h5>
                                                    </div>
                                                  </div>
                                                  <div class="card-body font-weight-bold">
                                                      <form action="" method="post">
                                                        <label for="">Name:</label>
                                                        <div class="form-group">
                                                          <input type="text" name="name" class="form-control" placeholder="Enter review Name">
                                                        </div>
                                                         <label for="">Reviwes Details :</label>
                                                        <div class="form-group">
                                                          <textarea name="review" class="form-control" id="" cols="30" rows="10" placeholder="Enter review Description"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                          <button type="submit" name="review" class="btn btn-block btn-info btn-sm font-weight-bold">Review</button>
                                                        </div>
                                                      </form>

                                                      <table class="table table-hover table-responsive" id="mytable">
                                                        <thead>
                                                          <tr>
                                                            <th>#</th>
                                                            <th>Category Name</th>
                                                            <th>Post Description</th>
                                                            <th>PostDate</th>
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php 
                                                             include ('config.php');
                                                              $Query="SELECT * FROM reviews";
                                                              $run=mysqli_query($con,$Query);
                                                              while ($row=mysqli_fetch_array($run)) {
                                                                ?>
                                                                  <tr>
                                                                    <td><?php echo $row['id'];?></td>
                                                                    <td><?php echo $row['name'];?></td>
                                                                <td>
                                                                <?php echo $row['postdescription'];
                                                                  echo "<br>";
                                                                ?></td>
                                                                <td>
                                                                <?php echo $row['postdate'];?></td>

                                                                  <td>
                                                                    <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-info">Update</a>
                                                                  </td>
                                                                  <td>
                                                                    <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-danger">Delete</a>
                                                                  </td>
                                                                  </tr>
                                                                <?php
                                                              }
                                                          ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                            <th>#</th>
                                                            <th>Category Name</th>
                                                            <th>Post Description</th>
                                                            <th>PostDate</th>
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                          </tr>
                                                        </tfoot>
                                                      </table>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                               </div>
                            </div> 
                          </div>       
                                            <!-- tabs card end -->

                                            <!-- social statustic start -->
                                           
                                          
                                            <!-- users visite and profile start -->
                                          
                                         

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>
