<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";//資料庫設定
$pdo=new PDO($dsn,'root','');//括號內：資料庫設定值/使用者帳號>預設root/密碼>預設無

$sql="select * from students limit 1"; //選取一筆資料檢查是否成功連線用的
$row=$pdo->query($sql)->fetch(); //取得sql執行結果用query(查詢函數)>>回傳結果是陣列型態的資料
echo "<pre>"; //陣列印出來會得到兩種key的值(重複的)
print_r($row);//一種是欄位順序，另一種是欄位名稱
echo "</pre>";
echo "<br>";
echo $row['name']; //只印出欄位名稱的陣列
echo $row['3']; //只印出欄順序的陣列
echo "<br>";
echo "<hr>";
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC); //限制取回的資料型態 FETCH_ASSOC
$row=$pdo->query($sql)->fetch(PDO::FETCH_NUM);//限制取回的資料型態 FETCH_NUM


