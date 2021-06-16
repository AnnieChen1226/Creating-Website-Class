
<?php
 //$teacher_ID = $_POST["teacher_ID"];
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'; //網頁編碼宣告  
  echo '  <meta name="viewport" content="width=device-width, initial-scale=1">';

    $item = $_POST["item"];

        $select_db = mysqli_connect("localhost", "root", "arthur0218", "saipdb")

                or die("MySQL 伺服器連結失敗 <br>");

        $sql_query = "SELECT * FROM `球員資訊` WHERE `背號`=$item";

  

        $result = mysqli_query($select_db, $sql_query);

    $row=mysqli_fetch_row($result);
   $styleBlock = sprintf('
    <style type="text/css">
       body {
         background-color:black;
       }
    </style>
  ', $yourColor);
  echo $styleBlock;
 
    echo "<img src='https://cdn.vox-cdn.com/thumbor/6J-JhmvvJv9KLLQ2sFpfEw39PIw=/0x0:384x244/1200x0/filters:focal(0x0:384x244):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/13189531/8_LeBron_JR_WYD.jpg' alt='error'/><br>";
    echo "查詢 $item 號球員結果：<BR>";

    echo " <p><font color='white'>球員名稱： $row[0]  </p>"; 
    echo " <p><font color='white'>年級： $row[2] </p> ";
    echo " <p><font color='white'>位置： $row[3]  </p>";
    echo " <p><font color='white'>身高： $row[4]  </p>";
    echo " <p><font color='white'>體重： $row[5] </p>";
          echo("<button onclick=\"location.href='index.html'\">回到主頁</button><br/>");


       mysql_close($db_link);
?>


