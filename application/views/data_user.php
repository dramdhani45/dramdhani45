<div class="box">
	<div class="box-header">
		Form input Data User
	</div>
	<div class="box-body">
		<form action=" <?php echo base_url() ?>index.php/welcome/Simpanuser" method="POST">
		Nama <input type="text" name="nama" class="form-control">
		Username <input type="text" name="username" class="form-control">
		Password <input type="text" name="password" class="form-control">
		<br>
		<button class="btn btn-primary btn-md pull-right fa fa-check" type="submit"> SIMPAN</button>
	</div>
</div>
<div class="box">
	<div class="box-header">
		<h4>DATA USER</h4>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover" id="example1">
			<thead>
				<td>ID User</td>
				<td>Nama</td>
				<td>Username</td>
				<td>Password</td>
				<td>Aksi</td>
			</thead>
			<?php
			foreach ($data_user as $key => $tampilkan) {
			 	echo "<tr>";
			 		echo "<td>$tampilkan->id_user</td>";
			 		echo "<td>$tampilkan->nama</td>";
			 		echo "<td>$tampilkan->username</td>";
			 		echo "<td>$tampilkan->password</td>";
			 		echo "<td><button class='btn btn-warning btn-xs glyphicon glyphicon-pencil'> EDIT</button> <button class='btn btn-danger
			 		 btn-xs  glyphicon glyphicon-erase'> HAPUS</button></td>";			 	
			 		echo "</tr>";
			 } 
			?>
		</table>
	</div>
</div>