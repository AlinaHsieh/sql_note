<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');
$sql="update students set 
    `uni_id`='{$_POST['uni_id']}', 
    `seat_num`='{$_POST['seat_num']}', 
    `name`='{$_POST['name']}', 
    `birthday`='{$_POST['birthday']}', 
    `national_id`='{$_POST['national_id']}', 
    `address`='{$_POST['address']}', 
    `parent`='{$_POST['parent']}', 
    `telphone`='{$_POST['telphone']}', 
    `major`='{$_POST['major']}', 
    `secondary`='{$_POST['secondary']}' 
where `id`='{$_POST['id']}'";
//呼應edit_form.php，id欄位也不下update指令，讓人修改
 
 
$pdo->exec($sql); //送到資料庫執行
header("location:crud.php"); //回到列表頁面


