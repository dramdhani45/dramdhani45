<div class="box">
	<div class="box-header">
		Form input Data Barang
	</div>
	<div class="box-body">
	<form action=" <?php echo base_url() ?>index.php/welcome/Simpanbarang" method="POST">
		Nama Barang <input type="text" name="nama_barang" class="form-control">
		Harga <input type="text" name="harga" class="form-control">
		Stock <input type="text" name="stock" class="form-control">
		Keterangan <input type="text" name="keterangan" class="form-control">
		<br>
		<button class="btn btn-primary btn-md pull-right fa fa-check " type="submit"> SIMPAN</button>
	</form>
	</div>
</div>

<div class="box">
	<div class="box-header">
		<h4>DATA BARANG</h4>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover" id="example1">
			<thead>
				<td>ID Barang</td>
				<td>Nama Barang</td>
				<td>Harga</td>
				<td>Stock</td>
				<td>Keterangan</td>
				<td>Aksi</td>
			</thead>
			<?php
			foreach ($data_barang as $key => $tampilkan) {
			 	echo "<tr>";
			 		echo "<td>$tampilkan->id_barang</td>";
			 		echo "<td>$tampilkan->nama_barang</td>";
			 		echo "<td>$tampilkan->harga</td>";
			 		echo "<td>$tampilkan->stock</td>";
			 		echo "<td>$tampilkan->keterangan</td>";
			 		echo "<td><button class='btn btn-warning btn-xs glyphicon glyphicon-pencil'> EDIT</button> <button class='btn btn-danger btn-xs glyphicon glyphicon-erase' onClick='hapus($tampilkan->id_barang)'> HAPUS</button></td>";
			 	echo "</tr>";
			 } 
			?>
		</table>
	</div>
</div>
<script>
	function hapus(id){
		$('#form_hapus')[0].reset();
		$.ajax({
			url: "<?php echo base_url('index.php/welcome/Getidbarang')?>/"+id,
			type:"GET",
			dataType:"JSON",
			success: function (data){
				$('[name="id_barang"]').val(data.id_barang);
				$('[#modal_form_hapus]').modal('show');
			},
			error: function(jqXHR,textStatus,errorThrown){
				alert('Error Ambil Ajax');
			}
		})
	}
</script>
<div class="modal fade" id="modal_form_hapus">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url() ?>index.php/welcome/Hapusbarang" class="form-horizontal" id="form_hapus" method="POST">
                	<input type="text" name="id_barang" value="">
                	<p>
                		Yaqueen Mau Menghapus Data Ini Hahh?
                	</p>
                	<button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><li class="fa fa-undo"></li>Batal</button>
                	<button type="submit" class="btn btn-danger"><li class="fa fa-check"></li>Ya</button>
                    </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
