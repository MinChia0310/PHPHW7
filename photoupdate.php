<?php
require("DBconnect.php");

$pNo=$_GET["pNo"];

$SQL="SELECT * FROM photo WHERE pNo='$pNo'";
if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $ppath=$row["ppath"];
        $pdate=$row["pdate"];
    }
}
?>

<h1>照片更新</h1>

Photo Number: <?php echo $pNo;?></br>

<form action="photoupdateconfirm.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="pNo" value='<?php echo $pNo;?>'>
<input type="file" name="photo" accept="image/*"><br/>
<input type = "submit" value="提交相片">

</form>