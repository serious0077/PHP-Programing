# boardz
게시판 검색 기능 완성하기

## 기존 파일
```
 .
├── css
│   └── style.css
├── src
│   └── boardz.css
├── board.html
```

## 추가 및 수정된 파일
```
 .
├── css
│   └── style.css
├── src
│   └── boardz.css
├── board.php (수정)
[만약 추가한 파일이 있으면, 내용 추가! 없으면 이 문구 삭제!]
```
## board.php (수정)

<<<<<<< HEAD
<?php
   $connect = mysql_connect("localhost","JYG","yungu");    // MySQL 데이터베이스 연결
   mysql_select_db("jyg_db", $connect);         // DB 선택
   $sql="select image_url, title, contents from boardz where title like '%$_POST[search]%';";  
   $result=mysql_query($sql);               // search값을 테이블에서 찾아 그 레이블행을 가져온다.


   while($row=mysql_fetch_array($result))       
   {
       if ($_POST[search] != NULL || $row[title] != NULL)   // 찾는값을 입력하지 않았을때와 제목이 없는 이미지일 때 열을 바꾼다.
           echo("<ul>");

       echo("                   
           <li>
               <h1>$row[title]</h1>               // 제목출력
               $row[contents]                      // 코멘트 출력
               <img src=$row[image_url] alt=\"demo image\"/>        // 이미지 출력
           </li>        
           ");

       if ($_POST[search] != NULL || $row[title] == NULL)
           echo("</ul>");
   }
?>
