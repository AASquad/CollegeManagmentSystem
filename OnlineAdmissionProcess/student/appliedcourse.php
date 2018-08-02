<?php








?>

                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Application Forms applied by  <?php echo $email; ?>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table  table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Application Number</th>
                                                <th>Year</th>
                                                <th>Stream</th>
                                                <th>Academic Year</th>
                                                <th>Full Name</th>
                                                
                                                <th>Caste</th>
                                                <th>date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Fee</th>
                                                <th>Receipt</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $appliedFormsquery ="SELECT * FROM applicationforms 
                                                                 INNER JOIN applicationforms2 ON
                                                                 applicationforms.applicationnumber = applicationforms2.applicationnumber
                                                                 INNER JOIN applicationforms5 ON
                                                                 applicationforms2.applicationnumber = applicationforms5.applicationnumber Where email='$email' AND status='Completed'";
                                            
                                            $executeappliedfrom = mysqli_query($con, $appliedFormsquery);
                                            while ($rowApplied = mysqli_fetch_array($executeappliedfrom)) {
                                                $course =$rowApplied['stream'];
                                                $year = $rowApplied['year'];
                                                $ayear = $rowApplied['ayear'];
                                                $caste = $rowApplied['caste'];
                                                $queryFee = "SELECT * FROM coursefee WHERE course='$course' AND year='$year' AND ayear='$ayear' AND caste='$caste'";
                                                $qfEx = mysqli_query($con, $queryFee);
                                                $rowqf = mysqli_fetch_array($qfEx);
                                                $feeamount = $rowqf['fee'];
                                            ?>
                                            <tr>
                                                <td><?php echo $rowApplied['applicationnumber']; ?></td>
                                                <td><?php echo $rowApplied['year']; ?></td>
                                                <td><?php echo $rowApplied['stream']; ?></td>
                                                <td><?php echo $rowApplied['ayear']; ?></td>
                                                <td><?php echo $rowApplied['fullname']; ?></td>
                                                
                                                <td><?php echo $rowApplied['caste']; ?></td>
                                                <td><?php echo $rowApplied['date']; ?></td>
                                                <td><?php echo $rowApplied['status']; ?></td>
                                                <td><?php echo $rowApplied['action']; ?></td>
                                                <td><?php 
                                                
                                                    if($rowApplied['action']=="Pending"){
                                                        echo "Not Available";
                                                        
                                                        
                                                    }else if($rowApplied['action']=="Paid"){
                                                        echo "Already Done";
                                                        
                                                    }else if($rowApplied['action']=="SELECTED"){
                                                        ?>
                                                   
                                                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="buyCredits" id="buyCredits">
                                                            <input type="hidden" name="cmd" value="_xclick">
                                                            <input type="hidden" name="business" value="admission@elphinstonecollegemumbai.ga">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="item_name" value="Fee Payment For Elphinstone College">
                                                            <input type="hidden" name="item_number" value="<?php echo $rowApplied['applicationnumber']; ?>">
                                                            <input type="hidden" name="amount" value="<?php echo $feeamount ?>">
                                                            <input type="hidden" name="return" value="https://elphinstonecollegemumbai.ga/student/elphiPanel.php?page=payment_success">
                                                       
                                                        <input type="submit" value="Pay Now" name="PayNow" class="btn btn-success">
                                                     </form>
                                                    
                                                    <?php
                                                    }                                            
                                                                                            
                                            ?></td>
                                              <td><?php 
                                              
                                               if($rowApplied['action']=="Pending"){
                                                        echo "Not Available";
                                                        
                                                        
                                                    }else if($rowApplied['action']=="Paid"){
                                                        
                                                        ?>
                                                  <form action="">
                                                        
                                                        <input type="submit" value="Receipt" name="Receipt" class="btn btn-danger">
                                                    </form>
                                              <?php
                                                    }else if($rowApplied['action']=="SELECTED"){
                                                        echo "Please Do Payment First";
                                                    }
                                                        
                                                    
                                              
                                              
                                              
                                              ?>
                                              </td>
                                              
                                              
                                              
                                              <td> 
                                              <?php  echo $feeamount;?>
                                              </td>  
                                            </tr>
                                            <?php 
                                            
                                            }
                                            
                                            
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>