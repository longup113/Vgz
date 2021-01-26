<div id="main">
	<table>
		<thead>
			<th>ID </th>
			<th>Image </th>
			<th>Name</th>
			<th>Price</th>
			


		</thead>
		<tbody>
			<?php
			$sql="SELECT*FROM product";
			$rs=mysqli_query($conn, $sql);
			if(mysqli_num_rows($rs)>0)
				while($row =mysqli_fetch_assoc($rs)){
			?>
			<tr>
				<td><?=$row['ID']?></td>
				<td><img class="anh-sp" src="image/<?=$row['Image']?>"/> </td>
				<td> <?=$row['Name'] ?> </td>
				<td><?= $row['Price']."$"?></td>
				<td><a href="suasp.php?id=<?= $row['ID']?>"> Edit</a> </td>\
				<td> <a href="?idxoa=<?= $row['ID']?>"> Delete</a></td>
			</tr>
			<?php
		}


			?>

		</tbody>



	</table>
	



</div>