<?php 
$prod = "select * from forms";

$prodresult= mysqli_query($con, $prod);

while ($row = mysqli_fetch_array($prodresult)) {
?>

    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
               <b>(</b> <?php echo $row['form_id'];?> <b>)   </b><?php  echo $row['form_year'];?>  of  <?php  echo $row['form_stream'];?>
            </div>
             <div class="panel-body">
                 <p> <?php echo $row['form_desc'];?></p>
             </div>
            <div  class="panel-footer">
                <a href="elphiPanel.php?page=admission&&year=<?php  echo $row['form_year'];?>&&stream=<?php  echo $row['form_stream'];?>">
            <button type="button" class="btn btn-success">APPLY NOW</button>
            </a>
                </div>
    </div>
    </div>
<?php 
}
?>