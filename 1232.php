<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="資4B-232-劉家名">
<title>查詢心理衡鑑預約資料</title>
<style type="text/css">
html,body{
height:100%;
margin:0;
font-family:"微軟正黑體";
}
.bgimg01, .bgimg02{
background-repeat:no-repeat;
background-size:cover;
background-position:center;
opacity:0.7;
}
.bgimg01{
background-image:url(images/LINE_ALBUM_相關圖示_221122.jpg);
min-height:65%;
}
.text01{
background-color:#e7e7e7;
padding:50px 10%;
text-align:justify;
color:#777;
}

.caption{
left:0;
top:45%;
position:absolute;
text-align:center;
width:100%;
}
.caption span.box{
color:#fff;
font-size:25px;
font-weight:bold;
background-color:#0d1117;
padding:20px;
letter-spacing:10px;
text-transform:uppercase;
}
h3{
text-transform:uppercase;
letter-spacing:5px;
font-size:20px;
}
</style>
</head>
<body>
<div class="bgimg01">
<div class="caption">

</div>
</div><!-- End pf bgimg01-->
<div class="text01">
<h3>查詢結果</h3>
<?php


$login_rf_date=$_POST["rf_date"];
$login_name_pt=$_POST["name_pt"];


$db_link=mysqli_connect("localhost","root","","abc") or die("MySQL伺服器連接失敗<br>");
mysqli_query($db_link,"SET NAMES utf8");
$sql_query="SELECT phone_date,ev_date,re_date FROM member  WHERE rf_date='$login_rf_date' AND name_pt='$login_name_pt'";
$result= mysqli_query($db_link,$sql_query);

   $fields=array("衡鑑日期","預估日期","已進入等待名單,轉介日期");

if($num=mysqli_num_rows($result) == 0)
{
    echo "您尚未進入等候名單，請您於看診隔日9:00後查詢（週六看診須等到週一，遇國定假日則順延），或於下次回診向醫師進一步詢問。";
    
}
   else{
   while($row=mysqli_fetch_row($result)) {
        echo"<tr>";
       for($j=0;$j<mysqli_num_fields($result);$j++)
            echo"<br>$fields[$j]=$row[$j]</br>";
            echo"</tr>";
    }
 }
 mysqli_close($db_link);
?>
    <br>
<input type ="button" onclick="javascript:location.href='http://127.0.0.1/ett.php'" value="回到 查詢 首頁"></input>
</div>
<div class="bgimg02">
</div><!-- End pf bgimg02-->
<div class="bgimg03">
</div><!-- End pf bgimg03-->
<div class="bgimg04">
</div><!-- End pf bgimg04-->
</body>
</html>

































































































































































































