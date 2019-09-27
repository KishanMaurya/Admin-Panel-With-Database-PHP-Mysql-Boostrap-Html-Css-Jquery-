<?php
$con=mysqli_connect('localhost','root','','north');
if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  /*$subcat=$_POST['subcategory'];*/
  $productname=$_POST['productname'];
  //$productcompany=$_POST['productCompany'];
  //$productprice=$_POST['productprice'];
  /*$productpricebd=$_POST['productpricebd'];
  $productdescription=$_POST['productDescription'];
  $productscharge=$_POST['productShippingcharge'];
  $productavailability=$_POST['productAvailability'];*/
  $productimage1=$_FILES["productimage1"]["name"];
  $productimage2=$_FILES["productimage2"]["name"];
  $productimage3=$_FILES["productimage3"]["name"];
  $productimage4=$_FILES["productimage4"]["name"];
  $productimage5=$_FILES["productimage5"]["name"];
  $productimage6=$_FILES["productimage6"]["name"];
  $productimage7=$_FILES["productimage7"]["name"];
  $productimage8=$_FILES["productimage8"]["name"];
  $productimage9=$_FILES["productimage9"]["name"];
  $productimage10=$_FILES["productimage10"]["name"];
  $productimage11=$_FILES["productimage11"]["name"];
  $productimage12=$_FILES["productimage12"]["name"];

  $title1=$_POST['title1'];
  $title2=$_POST['title2'];
  $title3=$_POST['title3'];
  $title4=$_POST['title4'];
  $title5=$_POST['title5'];
  $title6=$_POST['title6'];
  $title7=$_POST['title7'];
  $title8=$_POST['title8'];
  $title9=$_POST['title9'];
  $title10=$_POST['title10'];
  $title11=$_POST['title11'];
  $title12=$_POST['title12'];
  
//for getting product id
/*$query=mysqli_query($con,"select max(id) as pid from productsdemo");
  $result=mysqli_fetch_array($con,$query);
   $productid=$result['pid']+1;*/
  $dir="Image/";
if(!is_dir($dir)){
    mkdir("Image/");
  }

  move_uploaded_file($_FILES["productimage1"]["tmp_name"],"productimages/".$_FILES["productimage1"]["name"]);
  move_uploaded_file($_FILES["productimage2"]["tmp_name"],"productimages/".$_FILES["productimage2"]["name"]);
  move_uploaded_file($_FILES["productimage3"]["tmp_name"],"productimages/".$_FILES["productimage3"]["name"]);
    move_uploaded_file($_FILES["productimage4"]["tmp_name"],"productimages/".$_FILES["productimage4"]["name"]);
    move_uploaded_file($_FILES["productimage5"]["tmp_name"],"productimages/".$_FILES["productimage5"]["name"]);
    move_uploaded_file($_FILES["productimage6"]["tmp_name"],"productimages/".$_FILES["productimage6"]["name"]);
    move_uploaded_file($_FILES["productimage7"]["tmp_name"],"productimages/".$_FILES["productimage7"]["name"]);
    move_uploaded_file($_FILES["productimage8"]["tmp_name"],"productimages/".$_FILES["productimage8"]["name"]);
    move_uploaded_file($_FILES["productimage9"]["tmp_name"],"productimages/".$_FILES["productimage9"]["name"]);
    move_uploaded_file($_FILES["productimage10"]["tmp_name"],"productimages/".$_FILES["productimage10"]["name"]);
    move_uploaded_file($_FILES["productimage11"]["tmp_name"],"productimages/".$_FILES["productimage11"]["name"]);
    move_uploaded_file($_FILES["productimage12"]["tmp_name"],"productimages/".$_FILES["productimage12"]["name"]);

$sql=mysqli_query($con,"insert into productsdemo(category,productname,productimage1,productimage2,productimage3,productimage4,productimage5,productimage6,productimage7,productimage8,productimage9,productimage10,productimage11,productimage12,title1,title2,title3,title4,title5,title6,title7,title8,title9,title10,title11,title12) values('$category','$productname','$productimage1','$productimage2','$productimage3','$productimage4','$productimage5','$productimage6','$productimage7','$productimage8','$productimage9','$productimage10','$productimage11','$productimage12','$title1','$title2','$title3','$title4','$title5','$title6','$title7','$title8','$title9','$title10','$title11','$title12')");
if(!$sql)
{
    echo mysqli_error($con);
}
$_SESSION['msg']="Product Inserted Successfully !!";

}


?>

<?php include 'header.php';?>
  <?php if(isset($_POST['image']))
{?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Well done!<?php echo  mysqli_error($con); ?></strong> <?php echo $_SESSION['msg'];?>
                  </div>
<?php } ?>


                  <br />

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
                                                      <h5 class="text-white">Project Image :</h5>
                                                    </div>
                                                  </div>
                                                  <div class="card-body font-weight-bold">
                                                      <form action="#" method="post" enctype="multipart/form-data">
                                                        <label for="">Project Type:</label>
                                                        <div class="form-group">
                                                         <select name="type" id="" class="form-control">
                                                           <option value="">Select Category</option> 
                                                              <?php $query=mysqli_query($con,"select * from category");
                                                              while($row=mysqli_fetch_array($query))
                                                              {?>
                                                              
                                                              <option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
                                                              <?php } ?>
                                                          </select>
                                                        </div>
                                                        
                                                        <label for="">Project Name:</label>
                                                        <div class="form-group">
                                                          <input type="text" name="projectname" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Product Image1:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage1" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title1" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Product Image2:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage2" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title2" class="form-control" placeholder="Enter the Category Name">
                                                        </div>
                                                        <label for="">Product Image3:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage3" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title3" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Product Image4</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage4" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title4" class="form-control" placeholder="Enter the Category Name">
                                                        </div>
                                                        <label for="">Product Image5:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage5" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title5" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Product Image6:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage6" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title6" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Product Image7:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage7" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title7" class="form-control" placeholder="Enter the Category Name">
                                                        </div>



                                                        <label for="">Product Image8:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage8" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title8" class="form-control" placeholder="Enter the Category Name">
                                                        </div>


                                                        <label for="">Product Image9:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage9" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title9" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Product Image10:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage10" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title10" class="form-control" placeholder="Enter the Category Name">
                                                        </div>


                                                        <label for="">Product Image11:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage11" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title11" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Product Image12:</label>
                                                        <div class="form-group">
                                                          <input type="file" name="productimage12" class="form-control" placeholder="Enter the Category Name">
                                                        </div>

                                                        <label for="">Title :</label>
                                                        <div class="form-group">
                                                          <input type="text" name="title12" class="form-control" placeholder="Enter the Category Name">
                                                        </div>


                                                        <div class="form-group">
                                                          <button type="submit" name="image" value="image" class="btn btn-block btn-info btn-sm font-weight-bold">Add</button>
                                                        </div>
                                                      </form>

                                               

                                                       <div class="row">
                                                      <?php
                                                       //  $cid=intval($_GET['catid']);
                                                         $query2=mysqli_query($con,"SELECT  * FROM productsdemo");
                                                         while($rows = mysqli_fetch_array($query2))
                                                         {  
                                                             $project=$rows["productname"];
                                                             $image1=$rows["productimage1"];
                                                            
                                                          ?>
                                                          <div class="col-md-3" onmousedown='return false;' onselectstart='return false;'>
                                                            <figure>
                                                              <img class="img-fluid rounded" src="Image/<?php echo htmlentities($image1);?>" alt="<?php echo htmlentities($caption1);?>" style="width:400px;height:300px;"> 
                                                              <figcaption>
                                                                <?php echo htmlentities($project);?></figcaption>
                                                            </figure> 
                                                            <a href="projectimages.php?nid=<?php echo $rows['id']?>" class="button button-md button-default-outline button-wapasha" style="margin-top: -8%;padding: 14px 67px 12px !important;">View Project Images</a> 
                                                          </div>

                                                        <?php } ?> 
                                                      </div>
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
