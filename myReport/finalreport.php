



<?php
// 建立MySQL的資料庫連接 
 $styleBlock = sprintf('
    <style type="text/css">
       body {
         background-color:black;
       }
    </style>
  ', $yourColor);
  echo '  <meta name="viewport" content="width=device-width, initial-scale=1">';
  echo $styleBlock;
    echo "<h1><font color='blue'>你已成功傳送訊息囉!</font></h1>";
      echo("<button onclick=\"location.href='index.html'\">回到主頁</button><br/>");
    echo "<img src='https://images.prismic.io/coachtube%2F7ae37fa0-7f20-4d72-92f1-ed0f7199ebbd_trampoline-dunk-fail-1.gif?auto=compress,format' alt='error'/><br>";

$link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            'arthur0218',  // 密碼 
            'saipdb');  // 預設使用的資料庫名稱 
if ( !$link ) {
   echo "MySQL資料庫連接錯誤!<br/>";
   exit();
}
else {
   //echo "你已成功傳送訊息囉!<br/>";
}





 $name=$_POST['name'];
 $receiver=$_POST['receiver'];
 $message=$_POST['message'];


mysqli_query($link,"INSERT INTO messagetest(nickname,receiver,message)
         VALUES('$name','$receiver','$message')");





//mysqli_close($link);  // 關閉資料庫連接
?>