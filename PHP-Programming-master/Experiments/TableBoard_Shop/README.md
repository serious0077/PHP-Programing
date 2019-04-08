# TableBoard_Shop
게시판-Shop 의 TODO 완성하기!

## 기존 파일
```
 .
├── css - board_form.php와 index.php 에서 사용하는 stylesheet
│   └── ...
├── fonts - 폰트
│   └── ...
├── images - 아이콘 이미지
│   └── ...
├── vender - 외부 라이브러리
│   └── ...
├── js - board_form.php와 index.php 에서 사용하는 javascript
│   └── ...
├── function
│   └── insert.php - 게시글 작성 기능 구현
│   └── update.php - 게시글 수정 기능 구현
│   └── delete.php - 게시글 삭제 기능 구현
├── board_form.php - 게시글 작성/수정 시 사용하는 form이 포함된 php 파일
├── index.php - 게시글 조회 기능 구현
```

## MySQL 테이블 생성!

[여기에 테이블 생성 시, 사용한 Query 를 작성하세요.]

mysql> create tableboard_shop(
    -> num int not null auto_increment,
    -> Date date not null,
    -> Order_ID char(20) not null,
    -> Name char(20) not null,
    -> Price int not null,
    -> Quantity int not null,
    -> primary key(num)
    -> );



Note: 
- table 이름은 tableboard_shop 으로 생성
- 기본키는 num 으로, 그 외의 속성은 board_form.php 의 input 태그 name 에 표시된 속성 이름으로 생성
- 각 속성의 type 은 자유롭게 설정 (단, 입력되는 값의 타입과 일치해야 함)
    - ex) price -> int
    - ex) name -> char or varchar
    
## index.php 수정

$connect = mysql_connect("localhost","JYG","yungu");  // MySQL 데이터베이스 연결
mysql_select_db("jyg_db", $connect);  // DB 선택
$sql="select *from tableboard_shop;";   // 테이블에 있는 모든 값을 &sql에 저장
$result=mysql_query($sql);   //  함수의 인자에 있는 SQL 명령을 실행


while($row=mysql_fetch_array($result))  // mysql_query()의 반환값으로 데이터베이스에서 레코드의 데이터를 배열 형태로 가져온다.
{
    $total = ($row[price] * $row[quantity]);  // total값을 구하는 식
    echo("                      // 가져온 데이터를 $row[]형태로 레코드의 필드명을 배열 인덱스에 직접 입력하여 데이터를 출력한다.
     <tr onclick=\"location.href = ('board_form.php?num=$row[num]')\">
        <td class=\"column1\">$row[date]</td>
        <td class=\"column2\">$row[order_id]</td>
        <td class=\"column3\">$row[name]</td>
        <td class=\"column4\">$$row[price]</td>
        <td class=\"column5\">$row[quantity]</td>
        <td class=\"column6\">$$total</td>
     </tr>                    
     ");
}



## board_form.php 수정
- if(isset($_GET[num])) {   
-    $connect = mysql_connect("localhost","JYG","yungu");        // MySQL 데이터베이스 연결
-    mysql_select_db("jyg_db", $connect);        // DB 선택
-    $sql = "select * from tableboard_shop where num='$_GET[num]'";      //tableboard_shop 테이블에서 num에 해당하는 값을 불러온다.
-    $result = mysql_query($sql);        //함수의 인자에 있는 SQL 명령을 실행한 값을 result에 저장
-    $row = mysql_fetch_array($result);      //result값으로 데이터베이스에서 레코드의 데이터를 배열 형태로 가져온다.
- }



- $total = ($row[price] * $row[quantity]);        // total은 price * quantity이다.
- if(isset($_GET[num])) { //update 의 경우!   기존 정보를 표시하기 위해 $row[]의 값에 인덱스를 넣어 출력
    
-    <td class="column1"> <input name="date" type="text" value="<? echo("$row[date]");#TODO: 정보 표시 ?>" /> </td>
-    <td class="column2"> <input name="order_id" type="number" value="<? echo("$row[order_id]"); #TODO: 정보 표시 ?>" /> </td>
-    <td class="column3"> <input name="name" type="text" value="<?  echo("$row[name]"); #TODO: 정보 표시 ?>" /> </td>
-    <td class="column4"> <input name="price" type="number" placeholder="$" style="text-align: right;" value="<? echo("$row[price]");  #TODO: 정보 표시 ?>" /> </td>
-    <td class="column5"> <input name="quantity" type="number" value="<? echo("$row[quantity]"); #TODO: 정보 표시 ?>" style="text-align: right;" /> </td>
-    <td class="column6"> $<span id="total"> <? echo("$total"); #TODO: 정보 표시 ?> </span> </td>
    
-} else {        //insert의 경우  비어있다.  
-    <td class="column1"> <input name="date" type="text" /> </td>
-    <td class="column2"> <input name="order_id" type="number" /> </td>
-    <td class="column3"> <input name="name" type="text" /> </td>
-    <td class="column4"> <input name="price" type="number" placeholder="$" style="text-align: right;" /> </td>
-    <td class="column5"> <input name="quantity" type="number" value="1" style="text-align: right;" /> </td>
-    <td class="column6"> $<span id="total"></span> </td>   
-}





## function
### insert.php 수정

- $connect = mysql_connect("localhost","JYG","yungu");        // MySQL 데이터베이스 연결
- mysql_select_db("jyg_db", $connect);        // DB 선택
- ////tableboard_shop 테이블로 num에 해당하는 레코드를 삽입
-$sql="insert into tableboard_shop (date, order_id, name, price, quantity) values ($_POST[date], '$_POST[order_id]', '$_POST[name]', $_POST[price], $_POST[quantity])";
- mysql_query($sql, $connect);        //함수의 인자에 있는 SQL 명령을 실행
- mysql_close();      //MySQL 데이터베이스 종료


### update.php 수정

- $connect = mysql_connect("localhost","JYG","yungu");        // MySQL 데이터베이스 연결
- mysql_select_db("jyg_db", $connect);        // DB 선택
- //tableboard_shop 테이블에서 num에 해당하는 레코드를 POST로 받아온 내용으로 수정
- $sql="update tableboard_shop set date = $_POST[date], order_id = '$_POST[order_id]', name = '$_POST[name]', price = $_POST[price], quantity = $_POST[quantity] where num = $_GET[num];";
- mysql_query($sql, $connect);        //함수의 인자에 있는 SQL 명령을 실행
- mysql_close();          //MySQL 데이터베이스 종료


### delete.php 수정

- $connect = mysql_connect("localhost","JYG","yungu");        // MySQL 데이터베이스 연결
- mysql_select_db("jyg_db", $connect);        // DB 선택
- $sql="delete from tableboard_shop where num = $_GET[num];";     //tableboard_shop 테이블에서 num에 해당하는 레코드를 삭제
- mysql_query($sql, $connect);        //함수의 인자에 있는 SQL 명령을 실행
- mysql_close();      //MySQL 데이터베이스 종료
