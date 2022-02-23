<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>Multiple Koneksi - Dewan Komputer</title>
	<style type="text/css">
		table {
			font-size: 17px;
		}
		thead {
			font-weight: bold;
			background-color: blue;
			color: white;
		}
		td {
			padding: 10px;
		}
		hr {
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div align="center">
		<h2>MENAMPILKAN DATA DARI DATABASE YANG PERTAMA</h2>
		<table border="1">
	    	<thead>
	    		<tr>
	    			<td>No</td>
	    			<td>Nama Mahasiswa</td>
	    			<td>Alamat</td>
	    			<td>Jenis Kelamin</td>
	    			<td>Tanggal Masuk</td>
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
			        $no = 1;
			        $query = "SELECT * FROM tbl_mahasiswa ORDER BY nama_mahasiswa ASC";
			        $dewan1 = $db1->prepare($query);
			        $dewan1->execute();
			        $res1 = $dewan1->get_result();

			        if ($res1->num_rows > 0) {
				        while ($row = $res1->fetch_assoc()) {
				            $nama_mahasiswa = $row['nama_mahasiswa'];
				            $alamat = $row['alamat'];
				            $jenis_kelamin = $row['jenis_kelamin'];
				            $tgl_masuk = $row['tgl_masuk'];

							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$nama_mahasiswa."</td>";
								echo "<td>".$alamat."</td>";
								echo "<td>".$jenis_kelamin."</td>";
								echo "<td>".$tgl_masuk."</td>";
							echo "</tr>";
			    	} } else { 
			    		echo "<tr>";
			    			echo "<td colspan='5'>Tidak ada data ditemukan</td>";
			    		echo "</tr>";
			     	}
			    ?>
	    	</tbody>
	    </table>
    </div><hr>

    <div align="center">
		<h2>MENAMPILKAN DATA DARI DATABASE KEDUA</h2>
		<table border="1">
	    	<thead>
	    		<tr>
	    			<td>No</td>
	    			<td>Kode Matkul</td>
	    			<td>Nama Matkul</td>
	    			<td>SKS</td>
	    			<td>Semester</td>
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
			        $no = 1;
			        $query2 = "SELECT * FROM tbl_matkul ORDER BY nama_matkul ASC";
			        $dewan2 = $db2->prepare($query2);
			        $dewan2->execute();
			        $res2 = $dewan2->get_result();

			        if ($res2->num_rows > 0) {
				        while ($row = $res2->fetch_assoc()) {
				            $kode_matkul = $row['kode_matkul'];
				            $nama_matkul = $row['nama_matkul'];
				            $sks = $row['sks'];
				            $semester = $row['semester'];

							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$kode_matkul."</td>";
								echo "<td>".$nama_matkul."</td>";
								echo "<td>".$sks."</td>";
								echo "<td>".$semester."</td>";
							echo "</tr>";
			    	} } else { 
			    		echo "<tr>";
			    			echo "<td colspan='5'>Tidak ada data ditemukan</td>";
			    		echo "</tr>";
			     	}
			    ?>
	    	</tbody>
	    </table>
    </div>
</body>
</html>