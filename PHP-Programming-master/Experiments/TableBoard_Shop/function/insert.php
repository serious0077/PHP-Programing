<?php
# TODO: MySQL DB에서, POST로 받아온 내용 입력하기!

$connect = mysql_connect("localhost","JYG","yungu");        // MySQL 데이터베이스 연결
mysql_select_db("jyg_db", $connect);        // DB 선택
////tableboard_shop 테이블로 num에 해당하는 레코드를 삽입
$sql="insert into tableboard_shop (date, order_id, name, price, quantity) values ($_POST[date], '$_POST[order_id]', '$_POST[name]', $_POST[price], $_POST[quantity])";
mysql_query($sql, $connect);        //함수의 인자에 있는 SQL 명령을 실행
mysql_close();      //MySQL 데이터베이스 종료
?>

<script>
    location.replace('../index.php');
</script>
