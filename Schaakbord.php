<!DOCTYPE html>
<html>


	<head>
		<title></title>
		</head>

	<body>
		<table width="400px" cellspacing="0px" border= "1px">
<?php 
for( $row=1; $row<=8; $row++) 
			{ 

			echo "<tr>";
			for($col=1;$col<=8;$col++)
			 {
			$total=$row+$col;
			if ($total%2==0)
				{
				echo "<td height= 35px width =30px bgcolor=#FFFFFF></td>";
								}else{
				echo "<td height= 35px width =30px bgcolor=#000000></td>";
							}
					}
						echo "</tr>";
					}

				?>
		</table>
	</body>
</html>

