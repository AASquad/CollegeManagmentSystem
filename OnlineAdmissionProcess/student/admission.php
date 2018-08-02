<style>
            .display-none{
                display:none;
            }
        </style>


<?php
$runningyear = date("Y");
$currentyear = strtotime($runningyear);
$new_date = strtotime('+ 1 year', $currentyear);
$nextyear = date('Y', $new_date);
$academicyear = $runningyear ."-". $nextyear;
if(isset($_GET['page'])){
$year = $_GET['year'];
$stream = $_GET['stream'];
}
$tabbedpane = "select * from applicationforms where email='$email' AND year='$year'";
$prodresult= mysqli_query($con, $tabbedpane);
$row = mysqli_fetch_array($prodresult);
$emaildet = $row['email'];
$annualdetail=$row['annual'];

                
   
?>
<br>
<br>
 <span style="color: darkblue; font-weight:  bolder; " ><?php 
                echo 'Your working over '."$email"."  <br> This is your primary Email address please keep your credintiial safe for future use." ;
                ?></span>
<br>
<hr>
                <?php 
                    if(isset($_GET['subpage'])){
                        $sub = $_GET['subpage'];
                        $subpageinclude ="$sub".".php";
                        if(file_exists($subpageinclude)){
                            include ($subpageinclude);
                        }
                    }
                ?>
<hr>

<div class="col-lg-12">
<div class="panel tabbed-panel panel-primary">
    <div class="panel-heading clearfix">
        <div class="panel-title pull-left">Admission For <?php echo $year." of ". $stream ?> </div>
        <div class="pull-right">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-primary-1" data-toggle="tab">Step 1</a></li>
                <li><a href="#tab-primary-2" data-toggle="tab">Step 2</a></li>
                <li><a href="#tab-primary-3" data-toggle="tab">Step 3</a></li>
                <li><a href="#tab-primary-4" data-toggle="tab">Step 4</a></li>
                <li><a href="#tab-primary-5" data-toggle="tab">Step 5</a></li>
            </ul>
                
        </div>
    </div>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab-primary-1">
            <div class="panel-heading">
                <h3> Personal Information of student</h3>


            </div>
                <div class="panel-body">
                    <div class="row">
                    <form role="form" action="elphiPanel.php?page=admission&&year=<?php echo $year ?>&&stream=<?php echo $stream ?>&&subpage=stepone" method="POST">

                     <div class="col-lg-6">
                    <div class="form-group">
                        <label>Name in Full</label>
                        <input type="text" maxlength="200" class="form-control" name="fullname" required >
                         <label>Gender</label>
                         <select class="form-control" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        <label>Mother Name in Full</label>
                        <input type="text" maxlength="200" class="form-control" name="mname" required >
                        <label>Father Name in Full</label>
                        <input type="text" maxlength="200" class="form-control" name="fname" required>
                        
                        <label>Date of birth</label>
                        <input type="date"  class="form-control" name="dob" required>
                        <label>Date of birth in words</label>
                        <input type="text"  class="form-control" name="dobw" required>
                        <label>Place of birth(village)</label>
                        <input type="text"  class="form-control" name="pob" required>
                        <label>Districts</label>
                        <input type="text"  class="form-control" name="dist" required>
                        <label>State</label>
                        <input type="text"  class="form-control" name="state" required>
                        <label>Pin code</label>
                        <input type="tel" pattern="[0-9]{6}" maxlength="6" title="Pincode is always of Six letters only"  class="form-control" name="pinob" required>
                        
                    </div>

                     </div>
                         <div class="col-lg-6">
                    
                    <div class="form-group">
                        <label>Nationality</label>
                        <input type="text"  class="form-control" name="nationality" required>
                        <label>Domicile</label>
                        <input type="text"  class="form-control" name="domicile" >
                        <label>Email</label>
                        <input type="email"  class="form-control" value="<?php echo $email?> " name="email" readonly>
                        <label>Residence</label>
                        <input type="tel" maxlength="10" class="form-control" name="res" >
                        <label>Mobile</label>
                        <input type="tel" maxlength="10" class="form-control" name="mobile" pattern="[0-9]{10}" title="mobile number is always of Ten letters only" required>
                        <label>Hometown of family(nearest railway station)</label>
                        <input type="text"  class="form-control"  name="ht" required>
                        <label>Hometown State</label>
                        <input type="text"  class="form-control" name="htstate" required>
                        <label>Father Occupation</label>
                        <input type="text"  class="form-control" name="foccupation" required>
                        <label>Mother Occupation</label>
                        <input type="text"  class="form-control"  name="moccupation" required>
                        <label>Annual Income</label>
                        <input type="number"  class="form-control" name="income" required>

                    </div>

                     </div>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit" name="submit">
                        </form>
                    </div>  
                </div>



            </div>
            
            
            
            
            
            
            
            
            
            <div class="tab-pane fade" id="tab-primary-2">
                <div class="panel-heading">
                <h3> Other Information of student</h3>


            </div>
                <div class="panel-body">
                    <div class="row">
                     
                    <form role="form" action="elphiPanel.php?page=admission&&year=<?php echo $year ?>&&stream=<?php echo $stream ?>&&subpage=steptwo" method="POST">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Parent Address</label>
                                <textarea class="form-control" rows="3" name="paddress" required></textarea>
                            </div>
                        <label>Pincode</label>
                        <input type="tel" maxlength="6" class="form-control" name="parpin" required pattern="[0-9]{6}" title="Six letter Pincode">
                        <label>Parent Email</label>
                        <input type="email" class="form-control" name="pemail" >
                        <label>Parent Telephone</label>
                        <input type="number" maxlength="10" class="form-control" name="ptel" >
                        <label>Parent Mobile</label>
                        <input type="tel" maxlength="10" class="form-control" name="pmobile" pattern="[0-9]{10}" title="Ten letter Only" required>
                        <label>Name of Guardian</label>
                        <input type="text" name="gname" class="form-control" required>
                        
                        
                        
                    </div>
                </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                        
                        
                        <label>Relationship with guardian</label>
                        <input type="text" name="grel" class="form-control" required>
                        <div class="form-group">
                                <label>Guardian Address</label>
                                <textarea class="form-control" rows="3" name="gaddress" required></textarea>
                            </div>
                        <label>Pincode</label>
                        <input type="tel" maxlength="6" pattern="[0-9]{6}" class="form-control" name="gpin" required  title="Six letter Pincode">
                        <label>Guardian Email</label>
                        <input type="email" class="form-control" name="gemail" >
                        <label>Guardian Telephone</label>
                        <input type="tel" maxlength="10"  class="form-control" name="gtel" >
                        <label>Guardian Mobile</label>
                        <input type="tel" maxlength="10" pattern="[0-9]{10}" title="mobile number is always of Ten letters only" class="form-control" name="gmobile" required >
                        
                        
                    </div>
                </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                                <label>Caste</label>
                                                <select class="form-control" name="caste">
                                                    <option>Open</option>
                                                    <option>SC</option>
                                                    <option>ST</option>
                                                    <option>OBC</option>
                                                    <option>SBC</option>
                                                    <option>VJ</option>
                                                    <option>NT</option>
                                                    <option>OTHERS</option>
                                                    
                                                </select>
                                                
                                                
                                                <label>Physically Handicapped</label>
                                                <select class="form-control" name="phycsically">
                                                    <option>NO</option>
                                                    <option>YES</option>
                                                </select>
                                                
                                                
                                                <label>Special Category</label>
                                                <select class="form-control" name="category">
                                                    <option>NONE</option>
                                                    <option>DEFENSE</option>
                                                    <option>SPORT</option>
                                                    <option>TRANSFER</option>
                                                </select>
                                                
                                                <label>Marital Status</label>
                                                <select class="form-control" name="marital">
                                                    <option>Unmarried</option>
                                                    <option>Married</option>
                                                    
                                                </select>
                                                
                                                <label>Minority Community</label>
                                                <select class="form-control" id="minority" name="minority" onChange="dis_able()">
                                                    <option>No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                                <label>If Yes</label>
                                                <input type="text"  class="form-control" name="ifyes" >
                                                
                                                
                                                
                                                
                                            </div>
                                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit" name="submit">

                        </div>
                        </form>
                    </div>  
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            <?php
            $year = $_GET['year'];
            ?>
            <div class="tab-pane fade" id="tab-primary-3">
                <div class="panel-heading">
                <h3> Academic Information of student</h3>


            </div>
     <form role="form" action="elphiPanel.php?page=admission&&year=<?php echo $year ?>&&stream=<?php echo $stream ?>&&subpage=stepthree" method="POST">

                <div class="panel-body">
                    <div class="row">
                     
                    
                        
<div>
            <?php include 'MarksheetTables/syjc.php';?>
</div>
<div id="b" <?php if ($year == "FIRST YEAR") echo " class='display-none';" ?>>
           <?php include 'MarksheetTables/firstyear.php';?>
</div>
                        
                        
<div id="c"
              <?php 
              if ($year == "FIRST YEAR") {
                  echo " class='display-none'";
              }else if($year == "SECOND YEAR"){
                  echo " class='display-none'";
              }else{
                  
              } 
              
              ?>
              
              
              >
           <?php include 'MarksheetTables/secondyear.php';?>
</div>
                         
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit" name="submit" >

                     
                    </div>
                   
                </div>
                </form>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            <div class="tab-pane fade" id="tab-primary-4">
                <div class="panel-heading">
                <h3> Extra Curricular activities and Documents</h3>


            </div>
                <div class="panel-body">
                    <div class="row">
                     <div class="col-lg-12">
                    <form role="form" action="elphiPanel.php?page=admission&&year=<?php echo $year ?>&&stream=<?php echo $stream ?>&&subpage=stepfour" method="POST" enctype="multipart/form-data" >
                    <div class="form-group">
                        <div class="panel-heading">
                            <h1> Extra Curricular Activities</h1>
                            </div>
                        <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Event One</th>
                                                <th>Event Two</th>
                                                <th>Event Three</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <th>Event Level</th>
                                                <td><input type="text" value="NA" name="Elevel1" required/></td>
                                                <td><input type="text" value="NA" name="Elevel2" required/></td>
                                                <td><input type="text" value="NA" name="Elevel3" required/></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Event year</th>
                                                <td><input type="text"  value="NA" name="Eyear1" required /></td>
                                                <td><input type="text"  value="NA" name="Eyear2" required /></td>
                                                <td><input type="text"  value="NA" name="Eyear3" required /></td>
                                                </tr>
                                            <tr>
                                                <th>State/National</th>
                                                <td><input type="text" value="NA"  name="Estate1" required/></td>
                                                <td><input type="text"  value="NA"  name="Estate2" required/></td>
                                                <td><input type="text"  value="NA"  name="Estate3" required/></td>
                                                </tr>
                                                <tr>
                                                <th>Place Obtained</th>
                                                <td><input type="text" value="NA"  name="Eplace1" required/></td>
                                                <td><input type="text" value="NA"  name="Eplace2" required/></td>
                                                <td><input type="text"  value="NA"  name="Eplace3" required/></td>
                                                </tr>


                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                  
                        
                        <div class="form-group">
                            <div class="panel-heading">
                                <h1>Documents</h1>
                            </div>
                            <h3 style="color:red; text-align: center"> All Files Should be in .jpg/.jpeg/.png format </h3>
                                <h4 style="color:red; text-align: center"> Minimum Files Size should be 500kb  </h4>
                            <div class="col-lg-6">
                                
                                 <div class="form-group">
                                     
                                                <label>Upload Passport Size Photo</label>
                                                <input type="file" id="up" name="uploadPhoto" onchange="return photoValidation()" required>
                                                <label id="viewPhoto"></label>
                                                <script>
                                                function photoValidation(){
                                                    var fileInput= document.getElementById("up");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    var photoHeight = fileInput.clientHeight;
                                                    var photoWidth = fileInput.clientWidth;
                                                     var height = this.height;
                                                        var width = this.width;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }
                                                    else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            reader.onload = function(e){
                                                                document.getElementById("viewPhoto").innerHTML = '<img src="'+e.target.result+'" height="190" width="160"/>';
                                                            };
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script>
                                            </div>
                                                
                                
                            </div>
                            <div class="col-lg-6">
                                <label>Upload Sign</label>
                                <input type="file" id="us" name="uploadSign" onchange="return signValidation()" required>
                                                <label id="viewSign"></label>
                                                <script>
                                                function signValidation(){
                                                    var fileInput= document.getElementById("us");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            reader.onload = function(e){
                                                                document.getElementById("viewSign").innerHTML = '<img src="'+e.target.result+'" height="100" width="200"/>';
                                                            };
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script>
                            </div>
                            <hr>
                            <hr>
                            <div class="col-lg-12">
                                
                                <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        
                                            <tr>
                                                <td>Upload Caste Certificate</td>
                                                <td><input type="file" id="cc" name="uploadCC" onchange="return ccValidation()" ></td>
                                                <td style="color:red;"> Required if You belonging from Category </td>
                                                  <script>
                                                function ccValidation(){
                                                    var fileInput= document.getElementById("cc");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script> 
                                            </tr>
                                            <tr>
                                                <td>Upload Leaving Certificate</td>
                                                <td><input type="file" id="lc" name="uploadlC" onchange="return lcValidation()" required></td>
                                                <td style="color:red;">Required</td>
                                                    <script>
                                                function lcValidation(){
                                                    var fileInput= document.getElementById("lc");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script> 
                                            </tr>
                                            <tr>
                                                <td>Upload SSC Marksheet</td>
                                                <td> <input type="file" id="ssc" name="uploadSSC" onchange="return sscValidation()" required ></td>
                                                <td style="color:red;">required</td>
                                                   <script>
                                                function sscValidation(){
                                                    var fileInput= document.getElementById("ssc");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script>  
                                            </tr>
                                            <tr>
                                                <td>Upload HSE Marksheet</td>
                                                <td>  <input type="file" id="hse" name="uploadHse" onchange="return hseValidation()" required></td>
                                                <td style="color:red;">Required</td>
                                                  <script>
                                                function hseValidation(){
                                                    var fileInput= document.getElementById("hse");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script>  
                                            </tr>
                                            <tr>
                                                <td>Upload  First Semester   Marksheet</td>
                                                <td><input type="file" id="fys1" name="uploadfys1" onchange="return fys1Validation()" ></td>
                                                <td style="color:red;">Required if you are applying for SECOND YEAR</td>
                                                 <script>
                                                function fys1Validation(){
                                                    var fileInput= document.getElementById("fys1");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script>
                                            </tr>
                                            <tr>
                                                <td>Upload  Second Semester Marksheet</td>
                                                <td> <input type="file" id="fys2" name="uploadfys2" onchange="return fys2Validation()" ></td>
                                                <td style="color:red;">Required if you are applying for SECOND YEAR</td>
                                                 <script>
                                                function fys2Validation(){
                                                    var fileInput= document.getElementById("fys2");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script> 
                                            </tr>
                                            <tr>
                                                <td>Upload Third Semester Marksheet</td>
                                                <td> <input type="file" id="sys1" name="uploadsys1" onchange="return sys1Validation()" ></td>
                                                <td style="color:red;">Required if you are applying for THIRD YEAR</td>
                                                 <script>
                                                function sys1Validation(){
                                                    var fileInput= document.getElementById("sys1");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script>
                                            </tr>
                                            <tr>
                                                <td>Upload fourth Semester  Marksheet</td>
                                                <td> <input type="file" id="sys2" name="uploadsys2" onchange="return sys2Validation()" >
                               
                                   </td>
                                                <td style="color:red;">Required if you are applying for THIRD YEAR</td>
                                                <script>
                                                function sys2Validation(){
                                                    var fileInput= document.getElementById("sys2");
                                                    var filePath= fileInput.value;
                                                    var allowedExtension =/(\.jpg|\.jpeg|\.png)$/i;
                                                    
                                                    if(!allowedExtension.exec(filePath)){
                                                        alert('Please Upload Photo Having .jpg/ .jpeg/ .png only.');
                                                        fileInput.value= "";
                                                        return false;
                                                    }else{
                                                        if(fileInput.files && fileInput.files[0]){
                                                            var reader = new FileReader();
                                                            
                                                            reader.readAsDataURL(fileInput.files[0]);
                                                        }
                                                    }
                                                }
                                                
                                                </script>
                                            </tr>
                                            <tr style="color:red">
                                                <td colspan="3"> Please Submit Documents By Requirements. It is Important for verification of documents.</td>
                                            </tr>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                       
                        </div>
                        
                        
                        
                        
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit" name="submit">

               
                     </div>
                         </form>
                    </div>  
                </div>
                    
            </div>
                
            
            
            
            
            
            
            
            
            
            </div>
            <?php 
            $todaysdate = date("Y/m/d") ;
            
            
            ?>
            <div class="tab-pane fade" id="tab-primary-5">
                <div class="panel-body">
                    <div class="row">
                     <div class="col-lg-12">
                    <form role="form" action="elphiPanel.php?page=admission&&year=<?php echo $year ?>&&stream=<?php echo $stream ?>&&subpage=stepfive" method="POST">
                    <div class="form-group">
                        <label>Last Step of form submission</label>
                                               <div class="col-lg-12">
                                       
                                            
                                                <label>Place</label>
                                                <input type="text" name="place" class="form-control" required>
                                                <br>
                                                 <label>Date</label>
                                                 <input type="text" name="date" value="<?php echo $todaysdate; ?>" class="form-control" readonly>
                                                 <br>
                                                 <input type="hidden" name="status" value="Completed" class="form-control" >
                                                 <input type="hidden" name="action" value="Pending" class="form-control" >
                
                                                 </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit" name="submit">

                </div>
                        </form>
            </div>
        </div>
    </div>
</div>
<!-- /.panel -->
</div>
