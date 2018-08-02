<?php
?>
<hr>
<hr>
<br>
<h1>SECOND year of <?php echo $stream ?></h1> 

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
                                <label>Name of the College last Attended</label>
                                <input type="text" name="syclg" class="form-control" value="NA" required>
                                <label>Address</label>
                                <textarea class="form-control" rows="3"  name="syclgadd"  required>NA</textarea>
                                <label>Month and passing year</label>
                                <input type="text" name="sypassing" value="NA" placeholder="eg. March-2018" class="form-control" required>
                                <label>No. of Attempt</label>
                                <input type="number" name="syattempt" value="0" placeholder="" class="form-control" required>
                            
                                </div>
    </div>
    <hr>
    <!--First Sem Form -->
   <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Third Semester Details
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
                                                <td><input type="text" value="NA" name="sysem1subname1" required/></td>
                                                <td><input type="text" value="NA" name="sysem1subname2" required/></td>
                                                <td><input type="text" value="NA" name="sysem1subname3" required/></td>
                                                <td><input type="text" value="NA" name="sysem1subname4" required/></td>
                                                <td><input type="text" name="sysem1subname5" value="NA" required placeholder="If not availabe Write NA" /></td>
                                                <td><input type="text" name="sysem1subname6" value="NA" placeholder="If not availabe Write NA"  required/></td>
                                                <td></td>
                                            <tr>
                                                <th>Marks Obtained</th>
                                                <td><input type="number" onkeyup="getMarksSumSem7();persem7()" value="0" id="mmm11" name="sysem1mark1" required /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem7();persem7()" value="0" id="mmm12" name="sysem1mark2" required /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem7();persem7()" value="0" id="mmm13" name="sysem1mark3" required /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem7();persem7()" value="0" id="mmm14" name="sysem1mark4" required /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem7();persem7()" value="0" id="mmm15" name="sysem1mark5"  /></td>
                                                <td><input type="number" onkeyup="getMarksSumSem7();persem7()" value="0" id="mmm16" name="sysem1mark6"  /></td>
                                                <td><input type="number" id="mmm1total" value="0"   name="sysem1marktotal" readonly/></td>
                                            </tr>
                                            <script>
                                        function getMarksSumSem7(){
                                            //One
                                           if(document.getElementById('mmm11').value=="") {
                                            var mmm11=parseInt(document.getElementById('mmm11').value=0);
                                        }else{
                                            var mmm11=parseInt(document.getElementById('mmm11').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('mmm12').value=="") {
                                            var mmm12=parseInt(document.getElementById('mmm12').value=0);
                                        }else{
                                            var mmm12=parseInt(document.getElementById('mmm12').value);
                                        }
                                        //three
                                           if(document.getElementById('mmm13').value=="") {
                                            var mmm13=parseInt(document.getElementById('mmm13').value=0);
                                        }else{
                                            var mmm13=parseInt(document.getElementById('mmm13').value);
                                        }
                                        //four
                                           if(document.getElementById('mmm14').value=="") {
                                            var mmm14=parseInt(document.getElementById('mmm14').value=0);
                                        }else{
                                            var mmm14=parseInt(document.getElementById('mmm14').value);
                                        }
                                        //fivr
                                           if(document.getElementById('mmm15').value=="") {
                                            var mmm15=parseInt(document.getElementById('mmm15').value=0);
                                        }else{
                                            var mmm15=parseInt(document.getElementById('mmm15').value);
                                        }
                                        //si6
                                           if(document.getElementById('mmm16').value=="") {
                                            var mmm16=parseInt(document.getElementById('mmm16').value=0);
                                        }else{
                                            var mmm16=parseInt(document.getElementById('mmm16').value);
                                        }
                                        
                                            
                                            var mmm1total= mmm11 +mmm12+mmm13+mmm14+mmm15+mmm16;
                                            document.getElementById('mmm1total').value=mmm1total;
                                        }
                                        
                                        </script>
                                            <tr>
                                                <th>Out of Marks</th>
                                                <td><input type="text" onkeyup="getOutSumSem7();persem7()" value="0" id="ooo11" name="sysem1out1" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem7();persem7()" value="0" id="ooo12" name="sysem1out2" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem7();persem7()" value="0" id="ooo13" name="sysem1out3" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem7();persem7()" value="0" id="ooo14" name="sysem1out4" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem7();persem7()" value="0" id="ooo15" name="sysem1out5" required/></td>
                                                <td><input type="text" onkeyup="getOutSumSem7();persem7()" value="0" id="ooo16" name="sysem1out6" /></td>
                                                <td><input type="text"  id="ooo1total" value="0"  name="sysem1outtotal" readonly/></td>
                                            </tr>
                                            
                                            <script>
                                            function getOutSumSem7(){
                                                  //One
                                           if(document.getElementById('ooo11').value=="") {
                                            var ooo11=parseInt(document.getElementById('ooo11').value=0);
                                        }else{
                                            var ooo11=parseInt(document.getElementById('ooo11').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('ooo12').value=="") {
                                            var ooo12=parseInt(document.getElementById('ooo12').value=0);
                                        }else{
                                            var ooo12=parseInt(document.getElementById('ooo12').value);
                                        }
                                        //three
                                           if(document.getElementById('ooo13').value=="") {
                                            var ooo13=parseInt(document.getElementById('ooo13').value=0);
                                        }else{
                                            var ooo13=parseInt(document.getElementById('ooo13').value);
                                        }
                                        //four
                                           if(document.getElementById('ooo14').value=="") {
                                            var ooo14=parseInt(document.getElementById('ooo14').value=0);
                                        }else{
                                            var ooo14=parseInt(document.getElementById('ooo14').value);
                                        }
                                        //fivr
                                           if(document.getElementById('ooo15').value=="") {
                                            var ooo15=parseInt(document.getElementById('ooo15').value=0);
                                        }else{
                                            var ooo15=parseInt(document.getElementById('ooo15').value);
                                        }
                                        //si6
                                           if(document.getElementById('ooo16').value=="") {
                                            var ooo16=parseInt(document.getElementById('ooo16').value=0);
                                        }else{
                                            var ooo16=parseInt(document.getElementById('ooo16').value);
                                        }
                                        
                                            
                                            var ooo1total= ooo11 + ooo12 + ooo13 + ooo14 +ooo15 + ooo16;
                                            document.getElementById('ooo1total').value=ooo1total;
                                        }
                                        

                                            
                                            
                                            </script>
                                            <tr>
                                                <th colspan="7" style="text-align: right">Percentage</th>
                                                
                                                <td><input type="text" id="sysempercent"  value="0 value="NA"" name="sypercentage" readonly/><br>
                                                    </td>
                                            <script>
                                            function persem7(){    
                                            var sytotalsem1 = document.getElementById('mmm1total').value;
                                            var syoutofsem1 = document.getElementById('ooo1total').value;
                                            
                                            var calpersem1 = ((parseInt(sytotalsem1)/parseInt(syoutofsem1)))*100;
                                                
                                            document.getElementById('sysempercent').value=calpersem1+ "  %";
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
                                Fourth Semester Details
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
                                                <td><input type="text" value="NA" name="sysem2subname1" required/></td>
                                                <td><input type="text" value="NA" name="sysem2subname2" required/></td>
                                                <td><input type="text" value="NA" name="sysem2subname3" required/></td>
                                                <td><input type="text" value="NA" name="sysem2subname4"  required/></td>
                                                <td><input type="text" name="sysem2subname5" value="NA" required placeholder="If not availabe Write NA" /></td>
                                                <td><input type="text" name="sysem2subname6" value="NA" placeholder="If not availabe Write NA"  required/></td>
                                                <td></td>
                                            <tr>
                                                <th>Marks Obtained</th>
                                                <td><input type="number" onkeyup="getMarksSum6();per6()" value="0" id="mmm21" name="sysem2mark1" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum6();per6()" value="0" id="mmm22" name="sysem2mark2" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum6();per6()" value="0" id="mmm23" name="sysem2mark3" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum6();per6()" value="0" id="mmm24" name="sysem2mark4" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum6();per6()" value="0" id="mmm25" name="sysem2mark5"  /></td>
                                                <td><input type="number" onkeyup="getMarksSum6();per6()" value="0" id="mmm26" name="sysem2mark6"  /></td>
                                                <td><input type="number" id="mmm2total"   name="sysem2marktotal" readonly/></td>
                                            </tr>
                                            <script>
                                        function getMarksSum6(){
                                            //One
                                           if(document.getElementById('mmm21').value=="") {
                                            var mmm21=parseInt(document.getElementById('mmm21').value=0);
                                        }else{
                                            var mmm21=parseInt(document.getElementById('mmm21').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('mmm22').value=="") {
                                            var mmm22=parseInt(document.getElementById('mmm22').value=0);
                                        }else{
                                            var mmm22=parseInt(document.getElementById('mmm22').value);
                                        }
                                        //three
                                           if(document.getElementById('mmm23').value=="") {
                                            var mmm23=parseInt(document.getElementById('mmm23').value=0);
                                        }else{
                                            var mmm23=parseInt(document.getElementById('mmm23').value);
                                        }
                                        //four
                                           if(document.getElementById('mmm24').value=="") {
                                            var mmm24=parseInt(document.getElementById('mmm24').value=0);
                                        }else{
                                            var mmm24=parseInt(document.getElementById('mmm24').value);
                                        }
                                        //fivr
                                           if(document.getElementById('mmm25').value=="") {
                                            var mmm25=parseInt(document.getElementById('mmm25').value=0);
                                        }else{
                                            var mmm25=parseInt(document.getElementById('mmm25').value);
                                        }
                                        //si6
                                           if(document.getElementById('mmm26').value=="") {
                                            var mmm26=parseInt(document.getElementById('mmm26').value=0);
                                        }else{
                                            var mmm26=parseInt(document.getElementById('mmm26').value);
                                        }
                                        
                                            
                                            var mmm2total= mmm21 +mmm22+mmm23+mmm24+mmm25+mmm26;
                                            document.getElementById('mmm2total').value=mmm2total;
                                        }
                                        
                                        </script>
                                            <tr>
                                                <th>Out of Marks</th>
                                                <td><input type="text" onkeyup="getOutSum6();per6()" value="0" id="ooo21" name="sysem2out1" required/></td>
                                                <td><input type="text" onkeyup="getOutSum6();per6()" value="0" id="ooo22" name="sysem2out2" required/></td>
                                                <td><input type="text" onkeyup="getOutSum6();per6()" value="0" id="ooo23" name="sysem2out3" required/></td>
                                                <td><input type="text" onkeyup="getOutSum6();per6()" value="0" id="ooo24" name="sysem2out4" required/></td>
                                                <td><input type="text" onkeyup="getOutSum6();per6()" value="0" id="ooo25" name="sysem2out5" required/></td>
                                                <td><input type="text" onkeyup="getOutSum6();per6()" value="0" id="ooo26" name="sysem2out6" /></td>
                                                <td><input type="text"  id="ooo2total" value="0"  name="sysem2outtotal" readonly/></td>
                                            </tr>
                                            
                                            <script>
                                            function getOutSum6(){
                                                  //One
                                           if(document.getElementById('ooo21').value=="") {
                                            var ooo21=parseInt(document.getElementById('ooo21').value=0);
                                        }else{
                                            var ooo21=parseInt(document.getElementById('ooo21').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('ooo22').value=="") {
                                            var ooo22=parseInt(document.getElementById('ooo22').value=0);
                                        }else{
                                            var ooo22=parseInt(document.getElementById('ooo22').value);
                                        }
                                        //three
                                           if(document.getElementById('ooo23').value=="") {
                                            var ooo23=parseInt(document.getElementById('ooo23').value=0);
                                        }else{
                                            var ooo23=parseInt(document.getElementById('ooo23').value);
                                        }
                                        //four
                                           if(document.getElementById('ooo24').value=="") {
                                            var ooo24=parseInt(document.getElementById('ooo24').value=0);
                                        }else{
                                            var ooo24=parseInt(document.getElementById('ooo24').value);
                                        }
                                        //fivr
                                           if(document.getElementById('ooo25').value=="") {
                                            var ooo25=parseInt(document.getElementById('ooo25').value=0);
                                        }else{
                                            var ooo25=parseInt(document.getElementById('ooo25').value);
                                        }
                                        //si6
                                           if(document.getElementById('ooo26').value=="") {
                                            var ooo26=parseInt(document.getElementById('ooo26').value=0);
                                        }else{
                                            var ooo26=parseInt(document.getElementById('ooo26').value);
                                        }
                                        
                                            
                                            var ooo2total= ooo21 +ooo22+ooo23+ooo24+ooo25+ooo26;
                                            document.getElementById('ooo2total').value=ooo2total;
                                        }
                                        

                                            
                                            
                                            </script>
                                            <tr>
                                                <th colspan="7" style="text-align: right">Percentage</th>
                                                
                                                <td><input type="text" id="sysem2percent" value="0"  name="sypercentage2" readonly/><br>
                                                    </td>
                                            <script>
                                            function per6(){    
                                            var sytotal = document.getElementById('mmm2total').value;
                                            var syoutof = document.getElementById('ooo2total').value;
                                            
                                            var calper = ((parseInt(sytotal)/parseInt(syoutof)))*100;
                                                
                                            document.getElementById('sysem2percent').value=calper+ " %";
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

