<?php 

if(isset($_POST['submit'])){
    
    $place  = $_POST['place'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $action = $_POST['action'];
    
    
    
    
    
    $sqlconfirm = $con->query("select * from applicationforms where email='$email' AND year='$year'");
    $applicationformsfetching = mysqli_fetch_array($sqlconfirm);
    $applicationnumber = $applicationformsfetching['applicationnumber'];
    $sqlconfirm1 = $con->query("select * from applicationforms2 where applicationnumber='$applicationnumber'");
    $sqlconfirm2 = $con->query("select * from applicationforms3 where applicationnumber='$applicationnumber'");
    $sqlconfirm3=   $con->query("select * from applicationforms3a where applicationnumber='$applicationnumber'");
    $sqlconfirm4=   $con->query("select * from applicationforms4 where applicationnumber='$applicationnumber'");
    $sqlconfirm5=   $con->query("select * from applicationforms5 where applicationnumber='$applicationnumber'");
    
    
    if($sqlconfirm->num_rows==0){
                echo "Please Fill Step One Details";
                
                
            }else if($sqlconfirm1->num_rows == 0){
                
                
                echo "Please Fill Step two Details";
                
            }else if($sqlconfirm2->num_rows==0){
                
                
                 echo "Please Fill Step Three Details";
                 
                 
            }else if($sqlconfirm4->num_rows==0){
                
                
                echo"Please Fill Step Four Details First";
                
            }elseif ($sqlconfirm5->num_rows>0) {
            
                echo "You are already applied Please Check in applied Courses";
            
        }else{
                
                $query5="INSERT INTO applicationforms5 values('$applicationnumber','$place','$date','$status','$action')";
                
                
                if(mysqli_query($con,$query5)){?>
            
            <div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<?php echo "You have successfully applied"; ?>
</div>
<?php 
switch ($year){
    case "FIRST YEAR":
        ?>
       <script> window.location = "https://elphinstonecollegemumbai.ga/student/FYPdf.php?appnum=<?php echo $applicationnumber ?>";</script>
        <?php
       break;
     case "SECOND YEAR":
        include 'PDFLayout/SYpdf.php';
        break;
     case "THIRD YEAR":
        include 'PDFLayout/TYpdf.php';
        break;
    
    
    
}  







?>
       <?php
                    
                }else{
                    echo "Please fill details again";
                }
                
            }
}