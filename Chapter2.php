<?php
/**
 * Created by PhpStorm.
 * User: po031
 * Date: 2019-03-14
 * Time: 오후 12:34
 */
echo "반갑습니다.<br>";
echo "행복한 하루 되세요!<br>";

// 이 행은 주석 처리된다.
/* 여러 행을 주석 처리할 때는
이와 같이 한다. */


echo "<br>";
/*
“ ” 사이의 문자열이나 HTML 태그 출력
“echo” 는 대소문자 구분 없음
echo문 안에 따옴표 입력은  ‘ ’ 또는 이스케이프 문자 사용
*/
echo "---------------------- <br>";
echo "사과<br>";
echo "오렌지<br>";
echo "---------------------- <br>";
ECHO "&^%$&*%&&%*&(*(<br>";
ECHO "---------------------- <br>";
ECHO "사과<br>";
ECHO "오렌지<br>";
ECHO "---------------------- <br>";


// 변수는 영문이나 숫자 앞에 $ 사용
echo "<br>";
//상수와 변수
$a = "자동차";
echo "<br>"; 	  // 행 바꿈
echo $a;

$a = "기차";
echo "<br>";           // 행 바꿈
echo $a;

$a = 1000;
echo "<br>";           // 행 바꿈
echo "$a<br>";


echo "<br>";
//다섯 과목 점수의 합계
$kor= 85;                                    // 국어 점수
$eng = 90;                                   // 영어 점수
$math = 98;                                  // 수학 점수
$soc= 80;                                    // 사회 점수
$sci= 90;                                    // 과학 점수

$sum = $kor + $eng + $math + $soc + $sci;    // 다섯 과목 점수의 합계 계산

echo "다섯 과목 점수의 합계 : $sum<br>";


echo "<br>";
//영화관 입장료 계산
$child = 5000;   // 청소년 입장료 5,000원
$adult= 8000;    // 성인 입장료 8,000원
$num1= 3;        // 청소년 매수 3매
$num2 = 2;       // 성인 매수 2매

$total= $child * $num1 + $adult * $num2;

echo "청소년 입장료 : $child 원<br>";
echo "성인 입장료 : $adult 원<br>";
echo "청소년 : $num1 매, 성인 : $num2 매<br>";
echo "전체 입장료 : $total 원<br>";


echo "<br>";
//산술 연산자
$a = 7;
$b = 8;

$a++;
$b--;

$b = $a * $b + 2;

$c= $a + $b;

echo "a : $a, b : $b, c : $c<br>";

$c= $a % $b;

$b = $a + 2;

$a = $a * 3;

echo "a : $a, b : $b, c : $c<br>";


echo "<br>";
//문자 연결 연산자
$n1 = "010";          	// 휴대폰 국번호
$n2 = "2322";		// 휴대폰 가운데 번호
$n3 = "3233";		// 휴대폰 끝자리 번호

$hp = $n1."-".$n2."-".$n3;

echo "휴대폰 번호 : $hp<br>";


echo "<br>";
//대입 연산자
$a = 5;                // $a에 5를 대입
echo $a."<br>";        // echo "$a<br>"와 동일

$a += 3;               // $a = $a + 3과 동일
echo $a."<br>";

$a -= 4;               // $a = $a - 4와 동일
echo $a."<br>";

$a *= 2;               // $a = $a * 2와 동일
echo $a."<br>";

$a /= 4;               // $a = $a / 4와 동일
echo $a."<br>";

$a %= 2;               // $a = $a % 2와 동일
echo $a."<br>";

$a = "오렌지";
$a.= " 주스";          // $a = $a." 주스"와 동일
echo $a."<br>";
?>