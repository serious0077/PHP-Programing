<?php
/**
 * Created by PhpStorm.
 * User: po031
 * Date: 2019-03-14
 * Time: ���� 2:11
 */

//if�� ����
$num = 80;

if($num%2 == 0)
{
    echo "$num : ¦��<br>";
}
else
{
    echo "$num : Ȧ��<br>";
}


echo "<br>";
//����ö ��� ��� ��� ó��
$age = 68;
$fee = "5,000��";

if($age >= 65 )
{
    $fee = "����";
}

echo "���� : $age ��, ����� : $fee<br>";


echo "<br>";
//�ڰ��� ���� �հ� ����
$pilgi = 65;
$silgi = 90;
$result = "���հ�";

if($pilgi >= 70 && $silgi >= 80 )
{
    $result = "�հ�";
}

echo "�ʱ� ���� : $pilgi, �Ǳ� ���� : $silgi<br>";
echo "��� : $result<br>";


echo "<br>";
//�ڰ��� ���� ���հ� ����
$pilgi = 95;
$silgi = 55;
$result = "�հ�";

if($pilgi < 70 || $silgi < 80 )
{
    $result = "���հ�";
}

echo "�ʱ� ���� : $pilgi, �Ǳ� ���� : $silgi<br>";
echo "��� : $result<br>";


echo "<br>";
//��� �Ǻ�
$num = 15;     // ��� ����
$besu = 5;      // 5�� ��� ���θ� �Ǻ�

if ($num % $besu == 0)
{
    echo "$num ��(��) $besu �� �����.<br>";
}
else
{
    echo "$num ��(��) $besu �� ����� �ƴϴ�.<br>";
}


echo "<br>";
//�������� ���� �հ� ����
$test1 = 70;	         // ȹ���� �ʱ� ����
$test2 = 80;	         // ȹ���� �Ǳ� ����
$test3 = 87;	         // ȹ���� �������� ����

$test1_cut = 70;	// �ʱ� ���� ����
$test2_cut = 80;	// �Ǳ� ���� ����
$test3_cut = 90;	// �������� ���� ����

echo "�������� ���� �հ� ������<br>";
echo "�ʱ� ���� $test1_cut �� �̻�,<br>";
echo "�Ǳ� ���� $test2_cut �� �̻�,<br>";
echo "�������� ���� $test3_cut �� �̻��Դϴ�.<br><br>";

echo "ȹ���� �ʱ� ���� : $test1 ��, �Ǳ� ���� : $test2 ��, �������� ���� : $test3 ��<br><br>";

if ( ($test1>=$test1_cut) && ($test2>=$test2_cut) && ($test3>=$test3_cut) )
    echo "�հ��ϼ̽��ϴ�!!!<br>";
else
    echo "�˼������� ���հ��Դϴ�!!!<br>";


echo "<br>";
//���� ���� ū ������ ����
$a=2;
$b=6;
$c=9;

if($a > $b)              // $a�� $b���� ū ���
{
    if($a > $c)	          // $a�� $c���� ũ�ٸ�
    {
        $max1 = $a;       // ���� ū �� $max1�� $a��.
        if($b > $c)       // $b�� $c ��
        {
            $max2 = $b;        // �� ��° ū�� $max2�� $b
            $max3 = $c;        // �� ��° ū �� $max3�� $c
        }
        else
        {
            $max2 = $c;
            $max3 = $b;
        }
    }
    else	      // $a�� $b���� ū ���¿���, $c�� $a ���� ũ�ٸ�
    {
        $max1 = $c;      // $c�� ���� ũ��
        $max2 = $a;      // $a�� �� ����
        $max3 = $b;      // $b�� ���� �۴�.
    }
}
else // $b�� $a���� ū ���
{
    if($a>$c)              // $a�� $c�� ���ؾ� ��
    {
        $max1=$b;
        $max2=$a;
        $max3=$c;
    }
    else		 // $c�� $a���� ũ�ٸ�
    {
        if($b > $c)	 // $b�� $c �߿� ���� ū ���� ����
        {
            $max1 = $b;        // $b�� ���� ũ��
            $max2 = $c;        // $c�� �� ����
            $max3 = $a;        // $a�� ���� �۴�.
        }
        else
        {
            $max1 = $c;
            $max2 = $b;
            $max3 = $a;
        }
    }
}

echo"�Էµ� �� ���� : $a $b $c<br>";
echo"�Էµ� ������ ū ������� �迭 : $max1 $max2 $max3<br>";

?>