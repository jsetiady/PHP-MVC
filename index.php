<html>

	<head></head>
	<body>

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
                $sql = "SELECT id, nama, deskripsi, harga_barang, jumlah FROM barang";
                $result = $conn->query($sql);

                if (!isset($result->num_rows)) {
                    print_r($result);
                    echo "dsds";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
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