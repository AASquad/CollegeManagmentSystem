<?php
?>
<hr>
<hr>
<br>
<h1>First year of <?php echo $stream ?></h1> 

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
                                <label>Name of the College last Attended</label>
                                <input type="text" name="fyclg" class="form-control" value="NA" required>
                                <label>Address</label>
                                <textarea class="form-control" rows="3"  name="fyclgadd" required>NA</textarea>
                                <label>Month and passing year</label>
                                <input type="text" name="fypassing" value="NA" placeholder="eg. March-2018" class="form-control" required>
                                <label>No. of Attempt</label>
                                <input type="number" name="fyattempt" value="0" placeholder="" class="form-control" required>
                            
                                </div>
    </div>
    <hr>
    <!--First Sem Form -->
   <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                First Semester Details
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subject One</th>
                                                <th>Subject Two</th>
                                                <th>Subject Three</th>
                                                <th>Subject Four</th>
                                                <th>Subject Five</th>
                                                <th>Subject Six</th>
                                                <th>Subject Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <th>Subject Name</th>
                                                <td><input type="text" name="fysem1subname1"  value="NA" required/></td>
                                                <td><input type="text" name="fysem1subname2" value="NA" required/></td>
                                                <td><input type="text" name="fysem1subname3" value="NA" required/></td>
                                                <td><input type="text" name="fysem1subname4" value="NA" required/></td>
                                                <td><input type="text" name="fysem1subname5" value="NA" required placeholder="If not availabe Write NA" /></td>
                                                <td><input type="text" name="fysem1subname6" value="NA" placeholder="If not availabe Write NA"  required/></td>
                                                <td></td>
                                            <tr>
                                                <th>Marks Obtained</th>
                                                <td><input type="number" onkeyup="getMarksSumSem1();persem1()" value="0" id="mm11" name="fysem1mark1" required /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem1();persem1()" value="0" id="mm12" name="fysem1mark2" required /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem1();persem1()" value="0" id="mm13" name="fysem1mark3" required /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem1();persem1()" value="0" id="mm14" name="fysem1mark4" required /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem1();persem1()" value="0" id="mm15" name="fysem1mark5"  /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem1();persem1()" value="0" id="mm16" name="fysem1mark6"  /></td>
                                                <td><input type="number" id="mm1total" value="0"   name="fysem1marktotal" readonly/></td>
                                            </tr>
                                            <script>
                                        function getMarksSumSem1(){
                                            //One
                                           if(document.getElementById('mm11').value=="") {
                                            var mm11=parseInt(document.getElementById('mm11').value=0);
                                        }else{
                                            var mm11=parseInt(document.getElementById('mm11').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('mm12').value=="") {
                                            var mm12=parseInt(document.getElementById('mm12').value=0);
                                        }else{
                                            var mm12=parseInt(document.getElementById('mm12').value);
                                        }
                                        //three
                                           if(document.getElementById('mm13').value=="") {
                                            var mm13=parseInt(document.getElementById('mm13').value=0);
                                        }else{
                                            var mm13=parseInt(document.getElementById('mm13').value);
                                        }
                                        //four
                                           if(document.getElementById('mm14').value=="") {
                                            var mm14=parseInt(document.getElementById('mm14').value=0);
                                        }else{
                                            var mm14=parseInt(document.getElementById('mm14').value);
                                        }
                                        //fivr
                                           if(document.getElementById('mm15').value=="") {
                                            var mm15=parseInt(document.getElementById('mm15').value=0);
                                        }else{
                                            var mm15=parseInt(document.getElementById('mm15').value);
                                        }
                                        //si6
                                           if(document.getElementById('mm16').value=="") {
                                            var mm16=parseInt(document.getElementById('mm16').value=0);
                                        }else{
                                            var mm16=parseInt(document.getElementById('mm16').value);
                                        }
                                        
                                            
                                            var mm1total= mm11 +mm12+mm13+mm14+mm15+mm16;
                                            document.getElementById('mm1total').value=mm1total;
                                        }
                                        
                                        </script>
                                            <tr>
                                                <th>Out of Marks</th>
                                                <td><input type="text" onkeyup="getOutSumSem1();persem1()" value="0" id="oo11" name="fysem1out1" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem1();persem1()" value="0" id="oo12" name="fysem1out2" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem1();persem1()" value="0" id="oo13" name="fysem1out3" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem1();persem1()" value="0" id="oo14" name="fysem1out4" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem1();persem1()" value="0" id="oo15" name="fysem1out5" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem1();persem1()" value="0" id="oo16" name="fysem1out6" /></td>
                                                <td><input type="text"  id="oo1total" value="0"  name="fysem1outtotal" readonly/></td>
                                            </tr>
                                            
                                            <script>
                                            function getOutSumSem1(){
                                                  //One
                                           if(document.getElementById('oo11').value=="") {
                                            var oo11=parseInt(document.getElementById('oo11').value=0);
                                        }else{
                                            var oo11=parseInt(document.getElementById('oo11').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('oo12').value=="") {
                                            var oo12=parseInt(document.getElementById('oo12').value=0);
                                        }else{
                                            var oo12=parseInt(document.getElementById('oo12').value);
                                        }
                                        //three
                                           if(document.getElementById('oo13').value=="") {
                                            var oo13=parseInt(document.getElementById('oo13').value=0);
                                        }else{
                                            var oo13=parseInt(document.getElementById('oo13').value);
                                        }
                                        //four
                                           if(document.getElementById('oo14').value=="") {
                                            var oo14=parseInt(document.getElementById('oo14').value=0);
                                        }else{
                                            var oo14=parseInt(document.getElementById('oo14').value);
                                        }
                                        //fivr
                                           if(document.getElementById('oo15').value=="") {
                                            var oo15=parseInt(document.getElementById('oo15').value=0);
                                        }else{
                                            var oo15=parseInt(document.getElementById('oo15').value);
                                        }
                                        //si6
                                           if(document.getElementById('oo16').value=="") {
                                            var oo16=parseInt(document.getElementById('oo16').value=0);
                                        }else{
                                            var oo16=parseInt(document.getElementById('oo16').value);
                                        }
                                        
                                            
                                            var oo1total= oo11 + oo12 + oo13 + oo14 +oo15 + oo16;
                                            document.getElementById('oo1total').value=oo1total;
                                        }
                                        

                                            
                                            
                                            </script>
                                            <tr>
                                                <th colspan="7" style="text-align: right">Percentage</th>
                                                
                                                <td><input type="text" id="fysempercent" value="0"  name="fypercentage" readonly/><br>
                                                    </td>
                                            <script>
                                            function persem1(){    
                                            var fytotalsem1 = document.getElementById('mm1total').value;
                                            var fyoutofsem1 = document.getElementById('oo1total').value;
                                            
                                            var calpersem1 = ((parseInt(fytotalsem1)/parseInt(fyoutofsem1)))*100;
                                                
                                            document.getElementById('fysempercent').value=calpersem1+ "  %";
                                        }
                                            </script>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
    
                    
     <!--First Sem Form end here -->
     
     <!--Second Sem Form end here -->
    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Second Semester Details
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subject One</th>
                                                <th>Subject Two</th>
                                                <th>Subject Three</th>
                                                <th>Subject Four</th>
                                                <th>Subject Five</th>
                                                <th>Subject Six</th>
                                                <th>Subject Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <th>Subject Name</th>
                                                <td><input type="text" name="fysem2subname1" value="NA" required/></td>
                                                <td><input type="text" name="fysem2subname2" value="NA" required/></td>
                                                <td><input type="text" name="fysem2subname3" value="NA" required/></td>
                                                <td><input type="text" name="fysem2subname4" value="NA"  required/></td>
                                                <td><input type="text" name="fysem2subname5" value="NA" required placeholder="If not availabe Write NA" /></td>
                                                <td><input type="text" name="fysem2subname6" value="NA" placeholder="If not availabe Write NA"  required/></td>
                                                <td></td>
                                            <tr>
                                                <th>Marks Obtained</th>
                                                <td><input type="number" onkeyup="getMarksSum1();per1()" value="0" id="mm21" name="fysem2mark1" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum1();per1()" value="0" id="mm22" name="fysem2mark2" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum1();per1()" value="0" id="mm23" name="fysem2mark3" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum1();per1()" value="0" id="mm24" name="fysem2mark4" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum1();per1()" value="0" id="mm25" name="fysem2mark5"  /></td>
                                                <td><input type="number" onkeyup="getMarksSum1();per1()" value="0" id="mm26" name="fysem2mark6"  /></td>
                                                <td><input type="number" id="mm2total"  value="0"  name="fysem2marktotal" readonly/></td>
                                            </tr>
                                            <script>
                                        function getMarksSum1(){
                                            //One
                                           if(document.getElementById('mm21').value=="") {
                                            var mm21=parseInt(document.getElementById('mm21').value=0);
                                        }else{
                                            var mm21=parseInt(document.getElementById('mm21').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('mm22').value=="") {
                                            var mm22=parseInt(document.getElementById('mm22').value=0);
                                        }else{
                                            var mm22=parseInt(document.getElementById('mm22').value);
                                        }
                                        //three
                                           if(document.getElementById('mm23').value=="") {
                                            var mm23=parseInt(document.getElementById('mm23').value=0);
                                        }else{
                                            var mm23=parseInt(document.getElementById('mm23').value);
                                        }
                                        //four
                                           if(document.getElementById('mm24').value=="") {
                                            var mm24=parseInt(document.getElementById('mm24').value=0);
                                        }else{
                                            var mm24=parseInt(document.getElementById('mm24').value);
                                        }
                                        //fivr
                                           if(document.getElementById('mm25').value=="") {
                                            var mm25=parseInt(document.getElementById('mm25').value=0);
                                        }else{
                                            var mm25=parseInt(document.getElementById('mm25').value);
                                        }
                                        //si6
                                           if(document.getElementById('mm26').value=="") {
                                            var mm26=parseInt(document.getElementById('mm26').value=0);
                                        }else{
                                            var mm26=parseInt(document.getElementById('mm26').value);
                                        }
                                        
                                            
                                            var mm2total= mm21 +mm22+mm23+mm24+mm25+mm26;
                                            document.getElementById('mm2total').value=mm2total;
                                        }
                                        
                                        </script>
                                            <tr>
                                                <th>Out of Marks</th>
                                                <td><input type="text" onkeyup="getOutSum1();per1()" value="0" id="oo21" name="fysem2out1" required/></td>
                                                <td><input type="text" onkeyup="getOutSum1();per1()" value="0" id="oo22" name="fysem2out2" required/></td>
                                                <td><input type="text" onkeyup="getOutSum1();per1()" value="0" id="oo23" name="fysem2out3" required/></td>
                                                <td><input type="text" onkeyup="getOutSum1();per1()" value="0" id="oo24" name="fysem2out4" required/></td>
                                                <td><input type="text" onkeyup="getOutSum1();per1()" value="0" id="oo25" name="fysem2out5" required/></td>
                                                <td><input type="text" onkeyup="getOutSum1();per1()" value="0" id="oo26" name="fysem2out6" /></td>
                                                <td><input type="text"  id="oo2total" value="0"  name="fysem2outtotal" readonly/></td>
                                            </tr>
                                            
                                            <script>
                                            function getOutSum1(){
                                                  //One
                                           if(document.getElementById('oo21').value=="") {
                                            var oo21=parseInt(document.getElementById('oo21').value=0);
                                        }else{
                                            var oo21=parseInt(document.getElementById('oo21').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('oo22').value=="") {
                                            var oo22=parseInt(document.getElementById('oo22').value=0);
                                        }else{
                                            var oo22=parseInt(document.getElementById('oo22').value);
                                        }
                                        //three
                                           if(document.getElementById('oo23').value=="") {
                                            var oo23=parseInt(document.getElementById('oo23').value=0);
                                        }else{
                                            var oo23=parseInt(document.getElementById('oo23').value);
                                        }
                                        //four
                                           if(document.getElementById('oo24').value=="") {
                                            var oo24=parseInt(document.getElementById('oo24').value=0);
                                        }else{
                                            var oo24=parseInt(document.getElementById('oo24').value);
                                        }
                                        //fivr
                                           if(document.getElementById('oo25').value=="") {
                                            var oo25=parseInt(document.getElementById('oo25').value=0);
                                        }else{
                                            var oo25=parseInt(document.getElementById('oo25').value);
                                        }
                                        //si6
                                           if(document.getElementById('oo26').value=="") {
                                            var oo26=parseInt(document.getElementById('oo26').value=0);
                                        }else{
                                            var oo26=parseInt(document.getElementById('oo26').value);
                                        }
                                        
                                            
                                            var oo2total= oo21 +oo22+oo23+oo24+oo25+oo26;
                                            document.getElementById('oo2total').value=oo2total;
                                        }
                                        

                                            
                                            
                                            </script>
                                            <tr>
                                                <th colspan="7" style="text-align: right">Percentage</th>
                                                
                                                <td><input type="text" id="fysem2percent" value="0"  name="fypercentage2" readonly/><br>
                                                    </td>
                                            <script>
                                            function per1(){    
                                            var fytotal = document.getElementById('mm2total').value;
                                            var fyoutof = document.getElementById('oo2total').value;
                                            
                                            var calper = ((parseInt(fytotal)/parseInt(fyoutof)))*100;
                                                
                                            document.getElementById('fysem2percent').value=calper+ " %";
                                        }
                                            </script>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    
     <!--Second Sem Form end here -->
</div>

