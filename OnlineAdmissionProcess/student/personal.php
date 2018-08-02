<?php
$runningyear = date("Y");
$currentyear = strtotime($runningyear);
$new_date = strtotime('+ 1 year', $currentyear);
$nextyear = date('Y', $new_date);
$academicyear = $runningyear ."-". $nextyear;

if(isset($_POST[submit])){
    $academicyear = $runningyear ."-". $nextyear;
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $dob = $_POST['dob'];
    $dobwords = $_POST['dobwords'];
    $pob = $_POST['pob'];
    $dist =$_POST['dist'];
    $state = $_POST['state'];
    $nationality = $_POST['nationality'];
    $domicile = $_POST['domicile'];
    $myemail = $_POST['email'];
    $res =$_POST['res'];
    $mobile =$_POST['mobile'];
    $hometown =$_POST['hometown'];
    $homestate=$_POST['state'];
    $fatheroccu=$_POST['fatheroccu'];
    $motherocuu=$_POST['motheroccu'];
    $income=$_POST['income'];
    $paddress =$_POST['paddress'];
    $ppin=$_POST['ppin'];
    $pemail=$_POST['pemail'];
    $pres =$_POST['pres'];
    $pmobile =$_POST['pmobile'];
    $gname=$_POST['gname'];
    $grel=$_POST['grel'];
    $gaddress=$_POST['gaddress'];
    $gpin = $_POST['gpin'];
    $gemail=$_POST['gemail'];
    $gres=$_POST['gres'];
    $gmobile = $_POST['gmobile'];
    $caste = $_POST['caste'];
    $handicapped =$_POST['handicapped'];
    $social = $_POST['social'];
    $marital = $_POST['marital'];
    $minority = $_POST['minority'];
    $ifyes= $_POST['ifyes'];
    
 
$application = "select * from application where email='$email' AND stream ='$stream'";
$applicationresult= mysqli_query($con, $application);
$applicationcount = mysqli_num_rows($applicationresult);

                                   
                                   
if($applicationcount == 1){
 $aapinfo = "You have already submitted form data for"."$stream"." , Please fill form totally if empty";
}else{
    $applicationquery="INSERT INTO application(year,stream,academicyear,fullname,gender,fathername,mothername,dob,dobwords,pob,dist,state,nationality,domicile,email,res,mobile,hometown,homestate) values('$year','$stream','$academicyear','$fullname','$gender','$fathername','$mothername','$dob','$dobwords','$pob','$dist','$state','$nationality','$domicile','$email','$res','$mobile','$hometown','$homestate')";
    if(mysqli_query($con, $applicationquery)){
 ?>      
        
   <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?php echo "This value is successfully added Go to the next step and fill academic details";?>
                                    </div>
       
      <?php 
       }else{
      ?>
         
                                    <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                         <?php echo "Something went wrong please try again";?>
                                    </div>
       <?php
   }
    
    
    
}
                                   
                                

}



?>

