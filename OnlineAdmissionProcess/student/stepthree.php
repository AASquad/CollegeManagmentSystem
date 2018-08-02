<?php


if(isset($_POST['submit'])){
    
    //SYJC POST QUERIES
    $syjcclg =$_POST['syjcclg'];
    $syjcclgadd =$_POST['syjcclgadd'];
    $syjcpassing =$_POST['syjcpassing'];
    $syjcattempt =$_POST['syjcattempt'];
    
    $syjcsubname1=$_POST['syjcsubname1'];
    $syjcmark1=$_POST['syjcmark1'];
    $syjcout1=$_POST['syjcout1'];
    
    $syjcsubname2=$_POST['syjcsubname2'];
    $syjcmark2=$_POST['syjcmark2'];
    $syjcout2=$_POST['syjcout2'];
    
    $syjcsubname3=$_POST['syjcsubname3'];
    $syjcmark3=$_POST['syjcmark3'];
    $syjcout3=$_POST['syjcout3'];
    
    $syjcsubname4=$_POST['syjcsubname4'];
    $syjcmark4=$_POST['syjcmark4'];
    $syjcout4=$_POST['syjcout4'];
    
    $syjcsubname5=$_POST['syjcsubname5'];
    $syjcmark5=$_POST['syjcmark5'];
    $syjcout5=$_POST['syjcout5'];
    
    $syjcsubname6=$_POST['syjcsubname6'];
    $syjcmark6=$_POST['syjcmark6'];
    $syjcout6=$_POST['syjcout6'];
    
    $syjcsubname7=$_POST['syjcsubname7'];
    $syjcmark7=$_POST['syjcmark7'];
    $syjcout7=$_POST['syjcout7'];
    
    $syjcsubname8=$_POST['syjcsubname8'];
    $syjcmark8=$_POST['syjcmark8'];
    $syjcout8=$_POST['syjcout8'];
    
    $syjcsmarktotal=$_POST['syjcsmarktotal'];
    $syjcouttotal=$_POST['syjcouttotal'];
    $syjcpercentage=$_POST['syjcpercentage'];
    
    
    //SYJC POST QUERIS END
    
    //Fisrt year Queris
    $fyclg=$_POST['fyclg'];
    $fyclgadd=$_POST['fyclgadd'];
    $fypassing=$_POST['fypassing'];
    $fyattempt=$_POST['fyattempt'];
    
    $fysem1subname1=$_POST['fysem1subname1'];
    $fysem1mark1=$_POST['fysem1mark1'];
    $fysem1out1=$_POST['fysem1out1'];
    
    $fysem1subname2=$_POST['fysem1subname2'];
    $fysem1mark2=$_POST['fysem1mark2'];
    $fysem1out2=$_POST['fysem1out2'];
    
    $fysem1subname3=$_POST['fysem1subname3'];
    $fysem1mark3=$_POST['fysem1mark3'];
    $fysem1out3=$_POST['fysem1out3'];
    
    $fysem1subname4=$_POST['fysem1subname4'];
    $fysem1mark4=$_POST['fysem1mark4'];
    $fysem1out4=$_POST['fysem1out4'];
    
    $fysem1subname5=$_POST['fysem1subname5'];
    $fysem1mark5=$_POST['fysem1mark5'];
    $fysem1out5=$_POST['fysem1out5'];
    
    $fysem1subname6=$_POST['fysem1subname6'];
    $fysem1mark6=$_POST['fysem1mark6'];
    $fysem1out6=$_POST['fysem1out6'];
    
    $fysem1marktotal=$_POST['fysem1marktotal'];
    $fysem1outtotal=$_POST['fysem1outtotal'];
    $fypercentage=$_POST['fypercentage'];
    
    //sem2
    
    
    $fysem2subname1=$_POST['fysem2subname1'];
    $fysem2mark1=$_POST['fysem2mark1'];
    $fysem2out1=$_POST['fysem2out1'];
    
    $fysem2subname2=$_POST['fysem2subname2'];
    $fysem2mark2=$_POST['fysem2mark2'];
    $fysem2out2=$_POST['fysem2out2'];
    
    $fysem2subname3=$_POST['fysem2subname3'];
    $fysem2mark3=$_POST['fysem2mark3'];
    $fysem2out3=$_POST['fysem2out3'];
    
    $fysem2subname4=$_POST['fysem2subname4'];
    $fysem2mark4=$_POST['fysem2mark4'];
    $fysem2out4=$_POST['fysem2out4'];
    
    $fysem2subname5=$_POST['fysem2subname5'];
    $fysem2mark5=$_POST['fysem2mark5'];
    $fysem2out5=$_POST['fysem2out5'];
    
    $fysem2subname6=$_POST['fysem2subname6'];
    $fysem2mark6=$_POST['fysem2mark6'];
    $fysem2out6=$_POST['fysem2out6'];
    
    $fysem2marktotal=$_POST['fysem2marktotal'];
    $fysem2outtotal=$_POST['fysem2outtotal'];
    $fypercentage2=$_POST['fypercentage2'];
    
    

    
    //First year Query ends
    
    
    //Second Year Query
    
    //sem3
    $syclg=$_POST['syclg'];
    $syclgadd=$_POST['syclgadd'];
    $sypassing=$_POST['sypassing'];
    $syattempt=$_POST['syattempt'];
    
    $sysem1subname1=$_POST['sysem1subname1'];
    $sysem1mark1=$_POST['sysem1mark1'];
    $sysem1out1=$_POST['sysem1out1'];
    
    $sysem1subname2=$_POST['sysem1subname2'];
    $sysem1mark2=$_POST['sysem1mark2'];
    $sysem1out2=$_POST['sysem1out2'];
    
    $sysem1subname3=$_POST['sysem1subname3'];
    $sysem1mark3=$_POST['sysem1mark3'];
    $sysem1out3=$_POST['sysem1out3'];
    
    $sysem1subname4=$_POST['sysem1subname4'];
    $sysem1mark4=$_POST['sysem1mark4'];
    $sysem1out4=$_POST['sysem1out4'];
    
    $sysem1subname5=$_POST['sysem1subname5'];
    $sysem1mark5=$_POST['sysem1mark5'];
    $sysem1out5=$_POST['sysem1out5'];
    
    $sysem1subname6=$_POST['sysem1subname6'];
    $sysem1mark6=$_POST['sysem1mark6'];
    $sysem1out6=$_POST['sysem1out6'];
    
    $sysem1marktotal=$_POST['sysem1marktotal'];
    $sysem1outtotal=$_POST['sysem1outtotal'];
    $sypercentage=$_POST['sypercentage'];
    
    //sem4
    
    
    $sysem2subname1=$_POST['sysem2subname1'];
    $sysem2mark1=$_POST['sysem2mark1'];
    $sysem2out1=$_POST['sysem2out1'];
    
    $sysem2subname2=$_POST['sysem2subname2'];
    $sysem2mark2=$_POST['sysem2mark2'];
    $sysem2out2=$_POST['sysem2out2'];
    
    $sysem2subname3=$_POST['sysem2subname3'];
    $sysem2mark3=$_POST['sysem2mark3'];
    $sysem2out3=$_POST['sysem2out3'];
    
    $sysem2subname4=$_POST['sysem2subname4'];
    $sysem2mark4=$_POST['sysem2mark4'];
    $sysem2out4=$_POST['sysem2out4'];
    
    $sysem2subname5=$_POST['sysem2subname5'];
    $sysem2mark5=$_POST['sysem2mark5'];
    $sysem2out5=$_POST['sysem2out5'];
    
    $sysem2subname6=$_POST['sysem2subname6'];
    $sysem2mark6=$_POST['sysem2mark6'];
    $sysem2out6=$_POST['sysem2out6'];
    
    $sysem2marktotal=$_POST['sysem2marktotal'];
    $sysem2outtotal=$_POST['sysem2outtotal'];
    $sypercentage2=$_POST['sypercentage2'];
    
    //Second year query end
    
    
    
    
    
    
    $sqlconfirm = $con->query("select * from applicationforms where email='$email' AND year='$year'");
    $applicationformsfetching = mysqli_fetch_array($sqlconfirm);
    $applicationnumber = $applicationformsfetching['applicationnumber'];
    $sqlconfirm1 = $con->query("select * from applicationforms2 where applicationnumber='$applicationnumber'");
    $sqlconfirm2 = $con->query("select * from applicationforms3 where applicationnumber='$applicationnumber'");
    $sqlconfirm3=   $con->query("select * from applicationforms3a where applicationnumber='$applicationnumber'");
    
    
    switch ($year){
        case "FIRST YEAR":
            if($sqlconfirm->num_rows==0){
                echo "Please Fill Step One Details";
            }else if($sqlconfirm1->num_rows == 0){
                echo "Please Fill Step two Details";
                
            }else if($sqlconfirm2->num_rows>0){
                echo"You have already Submitted the details please fill step four details";
            }else{
                $syjcquery="INSERT INTO applicationforms3 values('$applicationnumber','$syjcclg','$syjcclgadd','$syjcpassing','$syjcattempt','$syjcsubname1','$syjcmark1','$syjcout1','$syjcsubname2','$syjcmark2','$syjcout2','$syjcsubname3','$syjcmark3','$syjcout3','$syjcsubname4','$syjcmark4','$syjcout4','$syjcsubname5','$syjcmark5','$syjcout5','$syjcsubname6','$syjcmark6','$syjcout6','$syjcsubname7','$syjcmark7','$syjcout7','$syjcsubname8','$syjcmark8','$syjcout8','$syjcsmarktotal','$syjcouttotal','$syjcpercentage')";
                if(mysqli_query($con,$syjcquery)){
                    echo "You have Succesfully Submiitted the details";
                }else{
                    echo "Please fill details again";
                }
                
            }
            break;
            
            
            
            
        case "SECOND YEAR":
            if($sqlconfirm->num_rows==0){
                echo "Please Fill Step One Details";
            }else if($sqlconfirm1->num_rows == 0){
                echo "Please Fill Step two Details";
                
            }else if($sqlconfirm2->num_rows>0){
                echo"You have already Submitted the Step 3 Details please go for step 4";
            }else{
                $syjcquery="INSERT INTO applicationforms3 values('$applicationnumber','$syjcclg','$syjcclgadd','$syjcpassing','$syjcattempt','$syjcsubname1','$syjcmark1','$syjcout1','$syjcsubname2','$syjcmark2','$syjcout2','$syjcsubname3','$syjcmark3','$syjcout3','$syjcsubname4','$syjcmark4','$syjcout4','$syjcsubname5','$syjcmark5','$syjcout5','$syjcsubname6','$syjcmark6','$syjcout6','$syjcsubname7','$syjcmark7','$syjcout7','$syjcsubname8','$syjcmark8','$syjcout8','$syjcsmarktotal','$syjcouttotal','$syjcpercentage')";
                $fyquery ="INSERT INTO applicationforms3a values ('$applicationnumber','$fyclg','$fyclgadd','$fypassing','$fyattempt','$fysem1subname1','$fysem1mark1','$fysem1out1','$fysem1subname2','$fysem1mark2','$fysem1out2','$fysem1subname3','$fysem1mark3','$fysem1out3','$fysem1subname4','$fysem1mark4','$fysem1out4','$fysem1subname5','$fysem1mark5','$fysem1out5','$fysem1subname6','$fysem1mark6','$fysem1out6','$fysem1marktotal','$fysem1outtotal','$fypercentage','$fysem2subname1','$fysem2mark1','$fysem2out1','$fysem2subname2','$fysem2mark2','$fysem2out2','$fysem2subname3','$fysem2mark3','$fysem2out3','$fysem2subname4','$fysem2mark4','$fysem2out4','$fysem2subname5','$fysem2mark5','$fysem2out5','$fysem2subname6','$fysem2mark6','$fysem2out6','$fysem2marktotal','$fysem2outtotal','$fypercentage2')";
                $syquery ="INSERT INTO applicationforms3b values ('$applicationnumber','$syclg','$syclgadd','$sypassing','$syattempt','$sysem1subname1','$sysem1mark1','$sysem1out1','$sysem1subname2','$sysem1mark2','$sysem1out2','$sysem1subname3','$sysem1mark3','$sysem1out3','$sysem1subname4','$sysem1mark4','$sysem1out4','$sysem1subname5','$sysem1mark5','$sysem1out5','$sysem1subname6','$sysem1mark6','$sysem1out6','$sysem1marktotal','$sysem1outtotal','$sypercentage','$sysem2subname1','$sysem2mark1','$sysem2out1','$sysem2subname2','$sysem2mark2','$sysem2out2','$sysem2subname3','$sysem2mark3','$sysem2out3','$sysem2subname4','$sysem2mark4','$sysem2out4','$sysem2subname5','$sysem2mark5','$sysem2out5','$sysem2subname6','$sysem2mark6','$sysem2out6','$sysem2marktotal','$sysem2outtotal','$sypercentage2')";

                
                
                if((mysqli_query($con,$syjcquery)) && (mysqli_query($con, $fyquery))){
                    echo "You have Succesfully Submiitted syjc details please fill step four ";
                }else{
                    echo "Please fill details againa";
                }
                 //$fyquery ="INSERT INTO applicationforms3a values ('$applicationnumber','$fyclg','$fyclgadd','$fypassing','$fyattempt','$fysem1subname1','$fysem1mark1','$fysem1out1','$fysem1subname2','$fysem1mark2','$fysem1out2','$fysem1subname3','$fysem1mark3','$fysem1out3','$fysem1subname4','$fysem1mark4','$fysem1out4','$fysem1subname5','$fysem1mark5','$fysem1out5','$fysem1subname6','$fysem1mark6','$fysem1out6','$fysem1marktotal','$fysem1outtotal','$fypercentage','$fysem2subname1','$fysem2mark1','$fysem2out1','$fysem2subname2','$fysem2mark2','$fysem2out2','$fysem2subname3','$fysem2mark3','$fysem2out3','$fysem2subname4','$fysem2mark4','$fysem2out4','$fysem2subname5','$fysem2mark5','$fysem2out5','$fysem2subname6','$fysem2mark6','$fysem2out6','$fysem2marktotal','$fysem2outtotal','$fypercentage2')";
                //if(mysqli_query($con,$fyquery)){
                //    echo "You have Succesfully Submiitted first year details";
               // }else{
               //     echo "Please fill details againa";
                }
                break;
                
                
                
                case "THIRD YEAR":
                     if($sqlconfirm->num_rows==0){
                echo "Please Fill Step One Details";
            }else if($sqlconfirm1->num_rows == 0){
                echo "Please Fill Step two Details";
                
            }else if($sqlconfirm2->num_rows>0){
                echo"You have already Submitted the Step 3 Details please go for step 4";
            }else{
                $syjcquery="INSERT INTO applicationforms3 values('$applicationnumber','$syjcclg','$syjcclgadd','$syjcpassing','$syjcattempt','$syjcsubname1','$syjcmark1','$syjcout1','$syjcsubname2','$syjcmark2','$syjcout2','$syjcsubname3','$syjcmark3','$syjcout3','$syjcsubname4','$syjcmark4','$syjcout4','$syjcsubname5','$syjcmark5','$syjcout5','$syjcsubname6','$syjcmark6','$syjcout6','$syjcsubname7','$syjcmark7','$syjcout7','$syjcsubname8','$syjcmark8','$syjcout8','$syjcsmarktotal','$syjcouttotal','$syjcpercentage')";
                $fyquery ="INSERT INTO applicationforms3a values ('$applicationnumber','$fyclg','$fyclgadd','$fypassing','$fyattempt','$fysem1subname1','$fysem1mark1','$fysem1out1','$fysem1subname2','$fysem1mark2','$fysem1out2','$fysem1subname3','$fysem1mark3','$fysem1out3','$fysem1subname4','$fysem1mark4','$fysem1out4','$fysem1subname5','$fysem1mark5','$fysem1out5','$fysem1subname6','$fysem1mark6','$fysem1out6','$fysem1marktotal','$fysem1outtotal','$fypercentage','$fysem2subname1','$fysem2mark1','$fysem2out1','$fysem2subname2','$fysem2mark2','$fysem2out2','$fysem2subname3','$fysem2mark3','$fysem2out3','$fysem2subname4','$fysem2mark4','$fysem2out4','$fysem2subname5','$fysem2mark5','$fysem2out5','$fysem2subname6','$fysem2mark6','$fysem2out6','$fysem2marktotal','$fysem2outtotal','$fypercentage2')";
                $syquery ="INSERT INTO applicationforms3b values ('$applicationnumber','$syclg','$syclgadd','$sypassing','$syattempt','$sysem1subname1','$sysem1mark1','$sysem1out1','$sysem1subname2','$sysem1mark2','$sysem1out2','$sysem1subname3','$sysem1mark3','$sysem1out3','$sysem1subname4','$sysem1mark4','$sysem1out4','$sysem1subname5','$sysem1mark5','$sysem1out5','$sysem1subname6','$sysem1mark6','$sysem1out6','$sysem1marktotal','$sysem1outtotal','$sypercentage','$sysem2subname1','$sysem2mark1','$sysem2out1','$sysem2subname2','$sysem2mark2','$sysem2out2','$sysem2subname3','$sysem2mark3','$sysem2out3','$sysem2subname4','$sysem2mark4','$sysem2out4','$sysem2subname5','$sysem2mark5','$sysem2out5','$sysem2subname6','$sysem2mark6','$sysem2out6','$sysem2marktotal','$sysem2outtotal','$sypercentage2')";

                
                
                if((mysqli_query($con,$syjcquery)) && (mysqli_query($con, $fyquery)) && (mysqli_query($con,$syquery))){
                    echo "You have Succesfully Submiitted the details please fill step four ";
                }else{
                    echo "Please fill details againa";
                }
                 //$fyquery ="INSERT INTO applicationforms3a values ('$applicationnumber','$fyclg','$fyclgadd','$fypassing','$fyattempt','$fysem1subname1','$fysem1mark1','$fysem1out1','$fysem1subname2','$fysem1mark2','$fysem1out2','$fysem1subname3','$fysem1mark3','$fysem1out3','$fysem1subname4','$fysem1mark4','$fysem1out4','$fysem1subname5','$fysem1mark5','$fysem1out5','$fysem1subname6','$fysem1mark6','$fysem1out6','$fysem1marktotal','$fysem1outtotal','$fypercentage','$fysem2subname1','$fysem2mark1','$fysem2out1','$fysem2subname2','$fysem2mark2','$fysem2out2','$fysem2subname3','$fysem2mark3','$fysem2out3','$fysem2subname4','$fysem2mark4','$fysem2out4','$fysem2subname5','$fysem2mark5','$fysem2out5','$fysem2subname6','$fysem2mark6','$fysem2out6','$fysem2marktotal','$fysem2outtotal','$fypercentage2')";
               // if(mysqli_query($con,$syquery)){
               //    echo "You have Succesfully Submiitted first year details";
               //}else{
                //    echo "Please fill details againa";
                //}
                    
                    
                }
            
            
        
    }
}
?>