<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas CRUD Zaki Geyan</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-family: "Arial";
		font-size: 24px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	
	</style>
</head>
<body>

<div id="w3-responsive">
	<h1>Tugas CRUD Zaki Geyan</h1>

	<div id="body">
		<a href="<?php echo site_url('welcome/form_input') ?>">Tambah Data</a>
		<table border="1" class="w3-table-all">
			<tr class="w3-orange">
				<td>No</td>
				<td>Nama Lengkap</td>
				<td>Alamat</td>
				<td>Opsi</td>
			</tr>
			<?php
			$no = 1;
			foreach($hasil as $r){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['nama_lengkap'] ?></td>
				<td><?php echo $r['alamat'] ?></td>
				<td>
					<a href="<?php echo site_url('welcome/form_edit/'.$r['kode_user']) ?>">Edit</a> || 
					<a href="<?php echo site_url('welcome/delete/'.$r['kode_user']) ?>" onclick="return confirm('Yakin ingin hapus data?')">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>