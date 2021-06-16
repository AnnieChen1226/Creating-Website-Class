<?php
 $styleBlock = sprintf('
    <style type="text/css">
       body {
         background-color:black;
       }
    </style>
  ', $yourColor);
    echo $styleBlock;
// 定義資料庫資訊
$DB_NAME = "saipdb"; // 資料庫名稱
$DB_USER = "root"; // 資料庫管理帳號
$DB_PASS = "arthur0218"; // 資料庫管理密碼
$DB_HOST = "localhost"; // 資料庫位址

// 連接 MySQL 資料庫伺服器
$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS);
if (empty($con)) {
    print mysqli_error($con);
    die("資料庫連接失敗！");
    exit;
}

// 選取資料庫
if (!mysqli_select_db($con, $DB_NAME)) {
    die("查詢訊息成功");
} else {
    echo "<p><font color='white'><br>查詢訊息成功<br></p>";
}

// 設定連線編碼
mysqli_query($con, "SET NAMES 'UTF-8'");
  $item = $_POST["user"];
// 取得資料
$sql = "SELECT * FROM messagetest WHERE receiver='$item'";
$result = mysqli_query($con, $sql);

// 獲得資料筆數
if ($result) {
    $num = mysqli_num_rows($result);
    if($num<1)
    {
    echo "<p><font color='white'><br>$item 還沒有人傳訊息給你，可憐</p><br>";
    echo "<img src='https://i.makeagif.com/media/5-03-2017/t5vnU_.gif' alt='error'/><br>";

    }

    else
    {
    echo "<p><font color='white'><br>$item 你有 " . $num . " 則訊息</p><br>";
     echo "<img src='https://media3.giphy.com/media/TvFCUSiRUfeIU/giphy.gif?cid=790b7611fee283b98564ba34d51ecc863ce00d6b7f1ad586&rid=giphy.gif&ct=g' alt='error'/><br>";
  
    echo "<p><font color='white'><br>訊息：</p><br>";

    }
   
}
 
// --- 顯示資料 --- //


$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("%s:  %s<br>", $row[0], $row[2]);
}



// 釋放記憶體
mysqli_free_result($result);

// 關閉連線
mysqli_close($con);
echo("<button onclick=\"location.href='index.html'\">回到主頁</button><br/>");
?>
