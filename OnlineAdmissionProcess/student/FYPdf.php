<?php 
$email= $_SESSION['passing'];
$password =$_SESSION['passingpass'];
$dbservername = "sql136.main-hosting.eu";
$dbusername = "u445700667_elphi";
$dbpassword = "elphi123";
$dbname="u445700667_elphi";
$con = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
} 
        $dbmsg= "Connected successfully to database";
        
        
        if(isset($_GET['appnum'])){
            $applicationnumber=$_GET['appnum'];
        }
        $query1="select * from applicationforms where applicationnumber='$applicationnumber'";
        $result1=mysqli_query($con,$query1);
        $row1= mysqli_fetch_array($result1);
        $fullname =  $row1['fullname'];
        $query4="select * from applicationforms where applicationnumber='$applicationnumber'";
        $result4=mysqli_query($con,$query4);
        $row4= mysqli_fetch_array($result4);
       
        $PhotoFetched = '<img src="data:image/jpeg;base64,'. base64_encode($row4['uploadPhoto']).'" height="190px" width="160px"/> <br>'
        
        
        
        


?>
<?php

require('fpdf/fpdf.php');


$pdf = new FPDF();
$pdf->Header();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image($PhotoFetched,10,10,-300);
$pdf->SetFont('Arial','',16);
$pdf->Cell(40,10,'name :');
$pdf->Cell(40,12,$fullname );

$pdf->Output();

?>
