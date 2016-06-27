<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>Multiplication Table</title>
	<meta name="Design a multiplication table using PHP">
	<style>
		table {
			border-collapse: collapse;
			text-align: center;
		}

		table, td, th {
			border: 1px solid black;
		}

		td {
			font-family: futura;
			padding: 5px;
		}

		td:first-child {
			background: #CCC;

		}

		td:nth-child(2n+3) {

			background: #CCC;
		}


	</style>
</head>
<body>

		<table>

			<thead>
    			<tr>
       				<td></td>
				<?php
         			for ($col = 1; $col <= 9; $col++)
         			{
           				echo "<td class='bold'>" . $col . "</td>";
         			}
					?>        
    			</tr>
   			</thead>
		<?php 
			for($i=1; $i<=10; $i++){ 
		?>

		        <tr>

		<?php   
				for($j=1; $j<=10; $j++){ 

		?>


		        	<td><?php echo $i * $j; ?></td>
		<?php   } 
		?>
		      	</tr>
		<?php } 
		?>

		<?php


		?>
	</table>
</body>
</html>