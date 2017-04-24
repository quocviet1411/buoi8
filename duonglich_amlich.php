 <!DOCTYPE html>
<html>
<head>
<title>Đổi năm dương lịch sang âm lịch</title>
</head>
<?php 
	$CAN = array('4' =>"Ất",'5' =>"Giáp",'6' =>"Bính",'7' =>"Đinh",'8' =>"Mậu",'9' =>"Kỷ",'0' =>"Canh",'1' =>"Tân",'2' =>"Nhâm",'3' =>"Quý");
	$CHI = array('4' =>"Tý",'5' =>"Sửu",'6' =>"Dần",'7' =>"Mẹo",'8' =>"Thìn",'9' =>"Tỵ",'10' =>"Ngọ",'11' =>"Mùi",'0' =>"Thân",'1' =>"Dậu",'2' =>"Tuất",'3' =>"Hợi");
 ?>
<body>
<form method="post" accept-charset="utf-8">
	<input type="text" name="namduonglich" id="dl" placeholder="Nhập năm dương lịch" value="<?php echo (isset($_POST['namduonglich'])?$_POST['namduonglich']:'');?>">
	<button type="submit" value="sub" name="click"> CLCK ĐÊ XEM</button>
</form>
<?php 
	if(isset($_POST['click']))
	{
		$a=$_POST['namduonglich'];
		if(!is_numeric($a))
		{
			echo ("Vui long nhap so");
		}
		else
			if($a==0)
			{
				echo("Vui long nhap so lon hon 0");
			}
			else
			{
				$ca=(int)$a%10;
				$ci=(int)$a%12;
				$str =$CAN[$ca]." ".$CHI[$ci];
				echo($str);
			}

	}
 ?>
</body>
</html> 