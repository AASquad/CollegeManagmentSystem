<?php
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $mname = $_POST['mname'];
    $fname = $_POST['fname'];
    $dob = $_POST['dob'];
    $dobw = $_POST['dobw'];
    $pob = $_POST['pob'];
    $dist = $_POST['dist'];
    $state = $_POST['state'];
    $pinob = $_POST['pinob'];
    $nationality =$_POST['nationality'];
    $domicile =$_POST['domicile'];
    $email =$_POST['email'];
    $res =$_POST['res'];
    $mobile =$_POST['mobile'];
    $ht=$_POST['ht'];
    $htstate=$_POST['htstate'];
    $foccupation=$_POST['foccupation'];
    $moccupation=$_POST['moccupation'];
    $income=$_POST['income'];
    
    $sqlcofirm = $con->query("select * from applicationforms where email='$email' AND year='$year'");
    

$prodresult= mysqli_query($con, $prod);
    if($sqlcofirm->num_rows>0){
        
         
        ?>

<div class="alert alert-warning alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 <?php echo "You are already submitted your form details"; ?>
</div>
<?php
        
    }else {
        
        
        $applicationformsquery = "INSERT INTO applicationforms(year,stream,ayear,fullname,gender,mname,fname,dob,dobw,pob,dist,state,pinob,nationality,domicile,email,res,mobile,ht,htstate,foccupation,moccupation,income) VALUES('$year','$stream','$academicyear','$fullname','$gender','$mname','$fname','$dob','$dobw','$pob','$dist','$state','$pinob','$nationality','$domicile','$email','$res','$mobile','$ht','$htstate','$foccupation','$moccupation','$income')";
        if(mysqli_query($con, $applicationformsquery)){
            
            ?>
            
            <div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<?php echo "You have successfully submitted details please go to the step TWO"; ?>
</div>
       <?php     
        }else{
            ?>
<div class="alert alert-warning alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<?php echo "please check your details and try again";?>
</div>
    <?php
        }
    }
}else{
    ?>
    
    <div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo "You Need to feel the details again"; ?>
    </div>
<?php
}

?>



