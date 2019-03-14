<?php
/**
 * Created by PhpStorm.
 * User: po031
 * Date: 2019-03-14
 * Time: 오후 2:11
 */

//if문 예제
$num = 80;

if($num%2 == 0)
{
    echo "$num : 짝수<br>";
}
else
{
    echo "$num : 홀수<br>";
}


echo "<br>";
//지하철 요금 경로 우대 처리
$age = 68;
$fee = "5,000원";

if($age >= 65 )
{
    $fee = "무료";
}

echo "나이 : $age 세, 입장료 : $fee<br>";


echo "<br>";
//자격증 시험 합격 판정
$pilgi = 65;
$silgi = 90;
$result = "불합격";

if($pilgi >= 70 && $silgi >= 80 )
{
    $result = "합격";
}

echo "필기 점수 : $pilgi, 실기 점수 : $silgi<br>";
echo "결과 : $result<br>";


echo "<br>";
//자격증 시험 불합격 판정
$pilgi = 95;
$silgi = 55;
$result = "합격";

if($pilgi < 70 || $silgi < 80 )
{
    $result = "불합격";
}

echo "필기 점수 : $pilgi, 실기 점수 : $silgi<br>";
echo "결과 : $result<br>";


echo "<br>";
//배수 판별
$num = 15;     // 대상 숫자
$besu = 5;      // 5의 배수 여부를 판별

if ($num % $besu == 0)
{
    echo "$num 은(는) $besu 의 배수다.<br>";
}
else
{
    echo "$num 은(는) $besu 의 배수가 아니다.<br>";
}


echo "<br>";
//운전면허 시험 합격 판정
$test1 = 70;	         // 획득한 필기 점수
$test2 = 80;	         // 획득한 실기 점수
$test3 = 87;	         // 획득한 도로주행 점수

$test1_cut = 70;	// 필기 기준 점수
$test2_cut = 80;	// 실기 기준 점수
$test3_cut = 90;	// 도로주행 기준 점수

echo "운전면허 시험 합격 기준은<br>";
echo "필기 점수 $test1_cut 점 이상,<br>";
echo "실기 점수 $test2_cut 점 이상,<br>";
echo "도로주행 점수 $test3_cut 점 이상입니다.<br><br>";

echo "획득한 필기 점수 : $test1 점, 실기 점수 : $test2 점, 도로주행 점수 : $test3 점<br><br>";

if ( ($test1>=$test1_cut) && ($test2>=$test2_cut) && ($test3>=$test3_cut) )
    echo "합격하셨습니다!!!<br>";
else
    echo "죄송하지만 불합격입니다!!!<br>";


echo "<br>";
//숫자 세게 큰 순서로 정렬
$a=2;
$b=6;
$c=9;

if($a > $b)              // $a가 $b보다 큰 경우
{
    if($a > $c)	          // $a가 $c보다 크다면
    {
        $max1 = $a;       // 가장 큰 수 $max1은 $a다.
        if($b > $c)       // $b와 $c 비교
        {
            $max2 = $b;        // 두 번째 큰수 $max2는 $b
            $max3 = $c;        // 세 번째 큰 수 $max3은 $c
        }
        else
        {
            $max2 = $c;
            $max3 = $b;
        }
    }
    else	      // $a가 $b보다 큰 상태에서, $c가 $a 보다 크다면
    {
        $max1 = $c;      // $c가 가장 크고
        $max2 = $a;      // $a가 그 다음
        $max3 = $b;      // $b가 가장 작다.
    }
}
else // $b가 $a보다 큰 경우
{
    if($a>$c)              // $a와 $c를 비교해야 함
    {
        $max1=$b;
        $max2=$a;
        $max3=$c;
    }
    else		 // $c가 $a보다 크다면
    {
        if($b > $c)	 // $b와 $c 중에 가장 큰 수가 있음
        {
            $max1 = $b;        // $b가 가장 크고
            $max2 = $c;        // $c가 그 다음
            $max3 = $a;        // $a는 가장 작다.
        }
        else
        {
            $max1 = $c;
            $max2 = $b;
            $max3 = $a;
        }
    }
}

echo"입력된 세 정수 : $a $b $c<br>";
echo"입력된 정수를 큰 순서대로 배열 : $max1 $max2 $max3<br>";

?>