<?php 
if(isset($_POST['submit'])){
    $paddress = $_POST['paddress'];
    $parpin=$_POST['parpin'];
    $pemail=$_POST['pemail'];
    $ptel=$_POST['ptel'];
    $pmobile=$_POST['pmobile'];
    $gname=$_POST['gname'];
    $grel=$_POST['grel'];
    $gaddress=$_POST['gaddress'];
    $gpin=$_POST['gpin'];
    $gemail=$_POST['gemail'];
    $gtel=$_POST['gtel'];
    $gmobile=$_POST['gmobile'];
    $caste=$_POST['caste'];
    $phycsically=$_POST['phycsically'];
    $category=$_POST['category'];
    $marital=$_POST['marital'];
    $minority=$_POST['minority'];
    $ifyes=$_POST['ifyes'];

    
    
    
    
   $sqlconfirm = $con->query("select * from applicationforms where email='$email' AND year='$year'");
   
   
   $applicationformsfetching = mysqli_fetch_array($sqlconfirm);
   $applicationnumber = $applicationformsfetching['applicationnumber'];
   $sqlconfirm2 = $con->query("select * from applicationforms2 where applicationnumber='$applicationnumber'");
   
   if($sqlconfirm->num_rows==0){
        echo "please fill the step one first";
        
        
        
        
    }elseif($sqlconfirm2->num_rows > 0){
       ?>

<div class="alert alert-warning alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 <?php echo "You have already submitted your step two details please fill step three details"; ?>
</div>
<?php
    }else{
        $applicationforms2query= "INSERT into applicationforms2 
            (applicationnumber,paddress,parpin,pemail,ptel,pmobile,gname,grel,gaddress,gpin,gemail,gtel,gmobile,caste,phycsically,category,marital,minority,ifyes) VALUES ('$applicationnumber','$paddress','$parpin','$pemail','$ptel','$pmobile','$gname','$grel','$gaddress','$gpin','$gemail','$gtel','$gmobile','$caste','$phycsically','$category','$marital','$minority','$ifyes')";
        
        if(mysqli_query($con, $applicationforms2query)){
           ?>
            
            <div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<?php echo "You have successfully submitted step two details please go to the step THREE"; ?>
</div>
       <?php     
        }else{
             ?>
<div class="alert alert-warning alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<?php echo "please check your details and try again Don't use letters in number field";?>
</div>
    <?php
        }
    }
        
         
       
}

 ?>
