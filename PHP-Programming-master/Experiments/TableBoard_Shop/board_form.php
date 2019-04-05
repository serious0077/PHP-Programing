<?php
if(isset($_GET[num])) {
    #TODO: MySQL 테이블에서, num에 해당하는 레코드 가져오기

    $connect = mysql_connect("localhost","JYG","yungu");        // MySQL 데이터베이스 연결
    mysql_select_db("jyg_db", $connect);        // DB 선택
    $sql = "select * from tableboard_shop where num='$_GET[num]'";      //tableboard_shop 테이블에서 num에 해당하는 값을 불러온다.
    $result = mysql_query($sql);        //함수의 인자에 있는 SQL 명령을 실행한 값을 result에 저장
    $row = mysql_fetch_array($result);      //result값으로 데이터베이스에서 레코드의 데이터를 배열 형태로 가져온다.
}
?>

<!-- 출처 : https://colorlib.com/wp/template/responsive-table-v1/ -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>

<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<a href="index.php" style="border: 1px; padding: 10px; background: #36304a; display: block; width: 100px; text-align: center; border-radius: 10px; margin-bottom: 5px;"> Back </a>
            <?php
                if(isset($_GET[num])) {
                    echo "<form method=\"POST\" action=\"function/update.php?num=$_GET[num]\">";
                } else {
                    echo "<form method=\"POST\" action=\"function/insert.php\">";
                }
            ?>
				<div class="table100">
					<table>
						<thead>
						<tr class="table100-head">
							<th class="column1">Date</th>
							<th class="column2">Order ID</th>
							<th class="column3">Name</th>
							<th class="column4">Price</th>
							<th class="column5">Quantity</th>
							<th class="column6">Total</th>
						</tr>
						</thead>
						<tbody>
						<tr>
                            <?php
                                $total = ($row[price] * $row[quantity]);        // total은 price * quantity이다.
                            if(isset($_GET[num])) { //update 의 경우!   기존 정보를 표시하기 위해 $row[]의 값에 인덱스를 넣어 출력
                                ?>
                                <td class="column1"> <input name="date" type="text" value="<? echo("$row[date]");#TODO: 정보 표시 ?>" /> </td>
                                <td class="column2"> <input name="order_id" type="number" value="<? echo("$row[order_id]"); #TODO: 정보 표시 ?>" /> </td>
                                <td class="column3"> <input name="name" type="text" value="<?  echo("$row[name]"); #TODO: 정보 표시 ?>" /> </td>
                                <td class="column4"> <input name="price" type="number" placeholder="$" style="text-align: right;" value="<? echo("$row[price]"); #TODO: 정보 표시 ?>" /> </td>
                                <td class="column5"> <input name="quantity" type="number" value="<? echo("$row[quantity]"); #TODO: 정보 표시 ?>" style="text-align: right;" /> </td>
                                <td class="column6"> $<span id="total"> <? echo("$total"); #TODO: 정보 표시 ?> </span> </td>
                                <?php
                            } else {        //insert의 경우  비어있다.
                                ?>
                                <td class="column1"> <input name="date" type="text" /> </td>
                                <td class="column2"> <input name="order_id" type="number" /> </td>
                                <td class="column3"> <input name="name" type="text" /> </td>
                                <td class="column4"> <input name="price" type="number" placeholder="$" style="text-align: right;" /> </td>
                                <td class="column5"> <input name="quantity" type="number" value="1" style="text-align: right;" /> </td>
                                <td class="column6"> $<span id="total"></span> </td>
                                <?php
                            }
                            ?>
						</tr>
						</tbody>
					</table>
				</div>
                <?php
                    if(isset($_GET[num])) {
                ?>
                    <a href="function/delete.php?num=<? echo $_GET[num] ?>" style="border: 1px; padding: 10px; background: #36304a; display: block; width: 100px; text-align: center; float: right; border-radius: 10px; margin-top: 5px; margin-left: 5px; color: #007bff;"> Delete </a>
                    <input style="border: 1px; padding: 10px; background: #36304a; display: block; width: 100px; text-align: center; float: right; border-radius: 10px; margin-top: 5px; margin-left: 5px; color: #007bff; cursor: pointer;" type="submit" value="Update">
                <?php
                    } else {
                ?>
				    <input style="border: 1px; padding: 10px; background: #36304a; display: block; width: 100px; text-align: center; float: right; border-radius: 10px; margin-top: 5px; margin-left: 5px; color: #007bff; cursor: pointer;" type="submit" value="Insert">
                <?php
                    }
                ?>
			</form>
		</div>
	</div>
</div>




<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<script>
    $("input[name='price']").change(function () {
        $('#total').text($("input[name='price']").val() * $("input[name='quantity']").val());
    })

    $("input[name='quantity']").change(function () {
        $('#total').text($("input[name='price']").val() * $("input[name='quantity']").val());
    })
</script>

</body>
</html>