<html>

	<head></head>
	<body>
            <a href="addBarang.php">Tambah Barang</a>
			<table border="1px">
				<tr>
					<th>id</th>
					<th>nama</th>
					<th>deskripsi</th>
					<th>harga</th>
                    <th>jumlah</th>
					<th>action</th>
				</tr>
            
                <?php
                
                include "connect.php";
                $sql = "SELECT id, nama, deskripsi, harga_satuan, jumlah FROM barang";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?=$row['id'];?></td>
					<td><?php $a = 4 + 2; echo $row['nama'];?></td>
					<td><?=$row['deskripsi'];?></td>
					<td><?=$row['harga_satuan'];?></td>
					<td><?=$row['jumlah'];?></td>
					<td></td>
                </tr>
                
                <?php

                    }
                } else {
                    echo "0 results";
                }
                $conn->close();

                
                ?>
                
            <!--
                <tr>
                    <td>..</td>
					<td>..</td>
					<td>..</td>
					<td>..</td>
					<td>..</td>
					<td>..</td>
                </tr>

-->
			</table>

	</body>

</html>


<?php


/*
Step by step:
1. Connect ke database
2. Select data dari database, tampilkan ke layar

*/


?>