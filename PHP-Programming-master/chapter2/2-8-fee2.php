﻿<?PHP
/* 영화관 입장료 계산
 * $child 와 '원'을 붙여 쓰면? -> #child원 을 합쳐서 변수로 인식함!!
 */

$child = 5000;     	// 청소년 입장료 5,000원
$adult = 8000;		// 성인 입장료 8,000원
$num1 = 3;		// 청소년 3매
$num2 = 2;		// 성인 2매

$total = $child * $num1 + $adult * $num2;

echo "청소년 입장료 : $child원<br>";
echo "성인 입장료 : $adult 원<br>";
echo "청소년 : $num1 매, 성인 : $num2 매<br>";
echo "전체 입장료 : $total 원";
?>