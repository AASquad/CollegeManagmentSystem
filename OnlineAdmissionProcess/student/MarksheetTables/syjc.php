<h3>Second Year of Junior College</h3>
<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                SYJC Marks Details
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="form-group">
                                <label>Name of the College last Attended</label>
                                <input type="text" name="syjcclg" class="form-control" required>
                                <label>Address</label>
                                <textarea class="form-control" rows="3"  name="syjcclgadd" required></textarea>
                                <label>Month and passing year</label>
                                <input type="text" name="syjcpassing" placeholder="eg. March-2018" class="form-control" required>
                                <label>No. of Attempt</label>
                                <input type="number" name="syjcattempt" placeholder="" class="form-control" required>
                            
                                </div>
                                <hr>
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
                                                <th>Subject Seven</th>
                                                <th>Subject Eight</th>
                                                <th>Subject Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <th>Subject Name</th>
                                                <td><input type="text" name="syjcsubname1" required/></td>
                                                <td><input type="text" name="syjcsubname2" required/></td>
                                                <td><input type="text" name="syjcsubname3" required/></td>
                                                <td><input type="text" name="syjcsubname4" required/></td>
                                                <td><input type="text" name="syjcsubname5" required/></td>
                                                <td><input type="text" name="syjcsubname6" value="NA" /></td>
                                                <td><input type="text" name="syjcsubname7" value="NA"/></td>
                                                <td><input type="text" name="syjcsubname8" value="NA"/></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Marks Obtained</th>
                                                <td><input type="number" onkeyup="getMarksSum();per()" value="0" id="m1" name="syjcmark1" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum();per()" value="0" id="m2" name="syjcmark2" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum();per()" value="0" id="m3" name="syjcmark3" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum();per()" value="0" id="m4" name="syjcmark4" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum();per()" value="0" id="m5" name="syjcmark5" required /></td>
                                                <td><input type="number" onkeyup="getMarksSum();per()" value="0" id="m6" name="syjcmark6"  /></td>
                                                <td><input type="number" onkeyup="getMarksSum();per()" value="0" id="m7" name="syjcmark7"  /></td>
                                                <td><input type="number" onkeyup="getMarksSum();per()" value="0" id="m8" name="syjcmark8" /></td>
                                                <td><input type="number" id="mtotal"   name="syjcsmarktotal" readonly/></td>
                                            </tr>
                                            
                                        <script>
                                        function getMarksSum(){
                                            //One
                                           if(document.getElementById('m1').value=="") {
                                            var m1=parseInt(document.getElementById('m1').value=0);
                                        }else{
                                            var m1=parseInt(document.getElementById('m1').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('m2').value=="") {
                                            var m2=parseInt(document.getElementById('m2').value=0);
                                        }else{
                                            var m2=parseInt(document.getElementById('m2').value);
                                        }
                                        //three
                                           if(document.getElementById('m3').value=="") {
                                            var m3=parseInt(document.getElementById('m3').value=0);
                                        }else{
                                            var m3=parseInt(document.getElementById('m3').value);
                                        }
                                        //four
                                           if(document.getElementById('m4').value=="") {
                                            var m4=parseInt(document.getElementById('m4').value=0);
                                        }else{
                                            var m4=parseInt(document.getElementById('m4').value);
                                        }
                                        //fivr
                                           if(document.getElementById('m5').value=="") {
                                            var m5=parseInt(document.getElementById('m5').value=0);
                                        }else{
                                            var m5=parseInt(document.getElementById('m5').value);
                                        }
                                        //si6
                                           if(document.getElementById('m6').value=="") {
                                            var m6=parseInt(document.getElementById('m6').value=0);
                                        }else{
                                            var m6=parseInt(document.getElementById('m6').value);
                                        }
                                        //seven
                                           if(document.getElementById('m7').value=="") {
                                            var m7=parseInt(document.getElementById('m7').value=0);
                                        }else{
                                            var m7=parseInt(document.getElementById('m7').value);
                                        }
                                        //eight
                                           if(document.getElementById('m8').value=="") {
                                            var m8=parseInt(document.getElementById('m8').value=0);
                                        }else{
                                            var m8=parseInt(document.getElementById('m8').value);
                                        }
                                            
                                            var mtotal= m1 +m2+m3+m4+m5+m6+m7+m8;
                                            document.getElementById('mtotal').value=mtotal;
                                        }
                                        
                                        </script>
                                            <tr>
                                                <th>Out of Marks</th>
                                                <td><input type="text" onkeyup="getOutSum();per()" value="0" id="o1" name="syjcout1" required/></td>
                                                <td><input type="text" onkeyup="getOutSum();per()" value="0" id="o2" name="syjcout2" required/></td>
                                                <td><input type="text" onkeyup="getOutSum();per()" value="0" id="o3" name="syjcout3" required/></td>
                                                <td><input type="text" onkeyup="getOutSum();per()" value="0" id="o4" name="syjcout4" required/></td>
                                                <td><input type="text" onkeyup="getOutSum();per()" value="0" id="o5" name="syjcout5" required/></td>
                                                <td><input type="text" onkeyup="getOutSum();per()" value="0" id="o6" name="syjcout6" /></td>
                                                <td><input type="text" onkeyup="getOutSum();per()" value="0" id="o7" name="syjcout7" /></td>
                                                <td><input type="text" onkeyup="getOutSum();per()" value="0" id="o8" name="syjcout8" /></td>
                                                <td><input type="text"  id="ototal" value="0"  name="syjcouttotal" readonly/></td>
                                            </tr>
                                            <script>
                                            function getOutSum(){
                                                  //One
                                           if(document.getElementById('o1').value=="") {
                                            var o1=parseInt(document.getElementById('o1').value=0);
                                        }else{
                                            var o1=parseInt(document.getElementById('o1').value);
                                        }
                                        
                                        //two
                                           if(document.getElementById('o2').value=="") {
                                            var o2=parseInt(document.getElementById('o2').value=0);
                                        }else{
                                            var o2=parseInt(document.getElementById('o2').value);
                                        }
                                        //three
                                           if(document.getElementById('o3').value=="") {
                                            var o3=parseInt(document.getElementById('o3').value=0);
                                        }else{
                                            var o3=parseInt(document.getElementById('o3').value);
                                        }
                                        //four
                                           if(document.getElementById('o4').value=="") {
                                            var o4=parseInt(document.getElementById('o4').value=0);
                                        }else{
                                            var o4=parseInt(document.getElementById('o4').value);
                                        }
                                        //fivr
                                           if(document.getElementById('o5').value=="") {
                                            var o5=parseInt(document.getElementById('o5').value=0);
                                        }else{
                                            var o5=parseInt(document.getElementById('o5').value);
                                        }
                                        //si6
                                           if(document.getElementById('o6').value=="") {
                                            var o6=parseInt(document.getElementById('o6').value=0);
                                        }else{
                                            var o6=parseInt(document.getElementById('o6').value);
                                        }
                                        //seven
                                           if(document.getElementById('o7').value=="") {
                                            var o7=parseInt(document.getElementById('o7').value=0);
                                        }else{
                                            var o7=parseInt(document.getElementById('o7').value);
                                        }
                                        //eight
                                           if(document.getElementById('o8').value=="") {
                                            var o8=parseInt(document.getElementById('o8').value=0);
                                        }else{
                                            var o8=parseInt(document.getElementById('o8').value);
                                        }
                                            
                                            var ototal= o1 +o2+o3+o4+o5+o6+o7+o8;
                                            document.getElementById('ototal').value=ototal;
                                        }
                                        

                                            
                                            
                                            </script>
                                            <tr>
                                                <th colspan="9" style="text-align: right">Percentage</th>
                                                
                                                <td><input type="text" id="syjcpercent"  name="syjcpercentage" readonly/><br>
                                                    </td>
                                            <script>
                                            function per(){    
                                            var syjctotal = document.getElementById('mtotal').value;
                                            var syjcoutof = document.getElementById('ototal').value;
                                            
                                            var calper = ((parseInt(syjctotal)/parseInt(syjcoutof)))*100;
                                                
                                            document.getElementById('syjcpercent').value=calper+ "  %";
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
