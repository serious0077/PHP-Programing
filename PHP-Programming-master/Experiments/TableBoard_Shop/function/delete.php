<?php
# TODO: MySQL DB에서, num에 해당하는 레코드 삭제하기!

$connect = mysql_connect("localhost","JYG","yungu");        // MySQL 데이터베이스 연결
mysql_select_db("jyg_db", $connect);        // DB 선택
$sql="delete from tableboard_shop where num = $_GET[num];";     //tableboard_shop 테이블에서 num에 해당하는 레코드를 삭제
mysql_query($sql, $connect);        //함수의 인자에 있는 SQL 명령을 실행
mysql_close();      //MySQL 데이터베이스 종료
?>

<script>
    location.replace('../index.php');
</script>
