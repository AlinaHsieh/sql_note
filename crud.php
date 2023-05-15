<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=student";
$pdo = new PDO($dsn, 'root', '');
?>
<style>
    table {
        border-collapse: collapse;
        width: 70%;
        min-width: 800px;

    }

    td {
        border: 1px solid lightblue;
        padding: 5px 8px;
    }
    a.btn{
        border:1px solid lightgreen;
        padding: 5px 15px;
        border-radius: 7px;
        display: inline-block;
        margin: 5px;
        box-shadow: 2px 2px 10px green;
        background-color: deepskyblue;
        color: white;
        text-decoration: none;
        position: relative;
        transition: all 0.5s;
    }

    a.btn:hover{
        text-decoration: underline;
        background-color: skyblue;
        position: relative;
        top: -3px;
        transform: scale(1.1);
        transition:all 0.5;
    }

</style>
<!-- 用php＋html刻出一個school資料庫的資料表格 (義大利麵條式寫法>php跟html穿插) -->
<h1>學生列表</h1>
<!-- 做一個新增連結 -->
<a class='btn' href="insert_form.php">新增學生資料</a>
<table>
    <tr>
        <td>序號</td>
        <td>學號</td>
        <td>班級座號</td>
        <td>姓名</td>
        <td>出生年月日</td>
        <td>身分證號碼</td>
        <td>住址</td>
        <td>家長</td>
        <td>電話</td>
        <td>科別</td>
        <td>畢業國中</td>
        <!-- 增加資料表編輯＆刪除的欄位 -->
        <td>編輯</td>
        <td>刪除</td>
    </tr>

    <?php //用php抓資料，並使用迴圈print每一筆資料
        $sql="select * from students";//選擇students資料表的全部資料
        $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC); //因為fetch一次只拿一筆資料，太慢太麻煩，改下fetchAll指令
        foreach($rows as $row){ //把變數$rows裡面的每一筆資料都會指定給變數$row(本身也是陣列，透過FETCH_ASSOC取得帶有key的資料)
    ?>
    <tr>
        <!-- $row['']的key對應資料表的id -->
        <!-- 用$row不用$rows?因為加了迴圈 -->
        <td><?=$row['id'];?></td>
        <td><?=$row['uni_id'];?></td>
        <td><?=$row['seat_num'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['birthday'];?></td>
        <td><?=$row['national_id'];?></td>
        <td><?=$row['address'];?></td>
        <td><?=$row['parent'];?></td>
        <td><?=$row['telphone'];?></td>
        <td><?=$row['major'];?></td>
        <td><?=$row['secondary'];?></td>
        <td>編輯</td>
        <!-- 以下刪除只是示範，不是正確用法 -->
        <!-- <td><a href="#" onclick="confirm('確定刪除嗎？')">刪除</a></td> -->

        <!-- 改變作法如下：給一個參數>導向另一個頁面專門做刪除動作，刪除完畢後在header回來此頁 -->
        <!-- 要帶“唯一可供參考的”值(id)才知道要刪除誰 >連到del.php頁面，後面接?(帶要接的值)-->
        <td><a href="del.php?id=<?=$row['id'];?>">刪除</a></td>

    </tr>
    <?php
    }
    ?>

</table>