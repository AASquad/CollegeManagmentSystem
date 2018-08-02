<?php
if(isset($_POST['submit'])){
    $Elevel1=$_POST['Elevel1'];
    $Eyear1=$_POST['Eyear1'];
    $Estate1=$_POST['Estate1'];
    $Eplace1=$_POST['Eplace1'];
    
    $Elevel2=$_POST['Elevel2'];
    $Eyear2=$_POST['Eyear2'];
    $Estate2=$_POST['Estate2'];
    $Eplace2=$_POST['Eplace2'];
    
    $Elevel3=$_POST['Elevel3'];
    $Eyear3=$_POST['Eyear3'];
    $Estate3=$_POST['Estate3'];
    $Eplace3=$_POST['Eplace3'];
    
     $uploadPhoto = addslashes(file_get_contents($_FILES["uploadPhoto"]["tmp_name"]));
     $uploadSign = addslashes(file_get_contents($_FILES["uploadSign"]["tmp_name"]));
     $uploadCC = addslashes(file_get_contents($_FILES["uploadCC"]["tmp_name"]));
     $uploadlC = addslashes(file_get_contents($_FILES["uploadlC"]["tmp_name"]));
     $uploadSSC = addslashes(file_get_contents($_FILES["uploadSSC"]["tmp_name"]));
     $uploadHse = addslashes(file_get_contents($_FILES["uploadHse"]["tmp_name"]));
     $uploadfys1 = addslashes(file_get_contents($_FILES["uploadfys1"]["tmp_name"]));
     $uploadfys2 = addslashes(file_get_contents($_FILES["uploadfys2"]["tmp_name"]));
     $uploadsys1 = addslashes(file_get_contents($_FILES["uploadsys1"]["tmp_name"]));
     $uploadsys2 = addslashes(file_get_contents($_FILES["uploadsys2"]["tmp_name"]));
     
     
     
    $sqlconfirm = $con->query("select * from applicationforms where email='$email' AND year='$year'");
    $applicationformsfetching = mysqli_fetch_array($sqlconfirm);
    $applicationnumber = $applicationformsfetching['applicationnumber'];
    $sqlconfirm1 = $con->query("select * from applicationforms2 where applicationnumber='$applicationnumber'");
    $sqlconfirm3 = $con->query("select * from applicationforms3 where applicationnumber='$applicationnumber'");
    $sqlconfirm3a=   $con->query("select * from applicationforms3a where applicationnumber='$applicationnumber'");
    $sqlconfirm4 =   $con->query("select * from applicationforms4 where applicationnumber='$applicationnumber'");
    
    
    
            if($sqlconfirm->num_rows==0){
                echo "Please Fill Step One Details";
                
                
            }else if($sqlconfirm1->num_rows == 0){
                
                
                echo "Please Fill Step two Details";
                
            }else if($sqlconfirm3->num_rows==0){
                
                
                 echo "Please Fill Step Three Details";
                 
                 
            }else if($sqlconfirm4->num_rows>0){
                
                
                echo"You have already Submitted the details please fill step Five details";
                
            }else{
                
                $query4="INSERT INTO applicationforms4 values('$applicationnumber','$Elevel1','$Eyear1','$Estate1','$Eplace1','$Elevel2','$Eyear2','$Estate2','$Eplace2','$Elevel3','$Eyear3','$Estate3','$Eplace3','$uploadPhoto','$uploadSign','$uploadCC','$uploadlC','$uploadSSC','$uploadHse','$uploadfys1','$uploadfys2','$uploadsys1','$uploadsys2')";
                
                
                if(mysqli_query($con,$query4)){
                    echo "You have Succesfully Submiitted the details";
                }else{
                    echo "Please fill details again";
                }
                
            }
}

?>