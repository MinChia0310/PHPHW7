<?php
require("DBconnect.php");

$SQL="SELECT*FROM photo";

echo"<h1>我的相簿</h1>";

if($result=mysqli_query($link,$SQL)){
    echo"<table border='1' width=30%>";
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr>";
        echo"<td>";
        echo"<a href='/h2/".$row['ppath']."'>";
        echo"<img src='/h2/".$row['ppath']."'width='100%'>";
     
        echo "</td>";
        echo "<td><a href='photoupdate.php?pNo=".$row["pNo"]."'>修改</a></td>";
        echo"</tr>";

    }
    echo"</table>";
}