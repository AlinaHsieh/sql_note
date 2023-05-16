<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');
// 執行sql的刪除語法(從students資料表刪除$_GET傳過來id的值)
//$_GET是陣列，不能直接寫(會讀不到)，要用大括號包起來(才會在執行完變數後轉換為字串)
$sql="delete from students where `id`='{$_GET['id']}'";
$pdo->exec($sql); //送到資料庫去執行;exec函數>>回傳影響幾筆資料
header("location:crud.php");
?>