<?php
  $prod_name = $_POST["name"];
  $prod_price = $_POST["price"];
  $prod_desc = $_POST["description"];
  $prod_file = $_POST["file"];
  $file_path = "img/";

  # TODO：把信息写入到sqlite3里，得到返回的pid
  # TODO: 给图片文件改名：id.jpg，存到服务器里



  require_once "connection.php";

  $q = "select * from products;";
  echo "<br>";
  foreach($dbh->query($q) as $row) {
    print $row["pid"] . "\t";
    print $row["name"] . "\t";
    print $row["catid"] . "\t";
    print $row["price"] . "\t";
    print $row["description"] . "</br>";
  }
?>
