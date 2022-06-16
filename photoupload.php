<?php
require("DBconnect.php");
//取得副檔名
$pathpart=pathinfo($_FILES['photo']['name']);
$extname=$pathpart['extension'];

//產生新檔案名稱
$finalphoto="Photo_".time().".".$extname;
$now=time();

//圖片路徑加入資料庫
$SQL="INSERT INTO photo (ppath,pdate) VALUE ('$finalphoto','$now')";



//上傳檔案
if(copy($_FILES['photo']['tmp_name'],$finalphoto)){
    if(mysqli_query($link,$SQL)){
        echo"<script type='text/javascript'>";
        echo"alert('照片上傳成功');";
        echo"</script>";
        echo"<meta http-equiv='Refresh' content='0;url=photolist.php'>";
       // header('LOcation:list.php');
    
    
    }else{
        echo"<script type='text/javascript'>";
        echo"alert('上傳失敗');";
        echo"</script>";
        echo"<meta http-equiv='Refresh' content='0;url=photo.php'>";
    
    
    
    }
    
}else{
    echo"<script type='text/javascript'>";
    echo"alert('上傳失敗');";
    echo"</script>";
    echo"<meta http-equiv='Refresh' content='0;url=photo.php'>";
}
?>