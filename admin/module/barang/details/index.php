 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
<?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12">
					  	
						<h3><strong>Detail Barang</strong></h3><hr>
						<a href="index.php?page=barang"><button class="btn btn-primary" style="border-radius: 0px"> Kembali </button></a><br><br>
						<?php if(isset($_GET['success-stok'])){?>
						<div class="alert alert-success">
							<p>Tambah stok berhasil</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Tambah data berhasil</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus data berhasil</p>
						</div>
						<?php }?>
						<table class="table table-striped">
								<tr>
									<th>ID Barang</th>
									<td><?php echo $hasil['id_barang'];?></td>
								</tr>
								<tr>
									<th>Kategori</th>
									<td><?php echo $hasil['nama_kategori'];?></td>
								</tr>
								<tr>
									<th>Stok</th>
									<td><?php echo $hasil['stok'];?></td>
								</tr>
								<tr>
									<th>Harga Beli</th>
									<td><?php echo $hasil['harga_beli'];?></td>
								</tr>
								<tr>
									<th>Harga Jual</th>
									<td><?php echo $hasil['harga_jual'];?></td>
								</tr>
								<tr>
									<th>Merk Barang</th>
									<td><?php echo $hasil['merk'];?></td>
								</tr>
								<tr>
									<th>Tanggal Input</th>
									<td><?php echo $hasil['tgl_input'];?></td>
								</tr>
								<tr>
									<th>Nama Barang</th>
									<td><?php echo $hasil['nama_barang'];?></td>
								</tr>
								<tr>
									<th>Satuan Barang</th>
									<td><?php echo $hasil['satuan_barang'];?></td>
								</tr>
								
								
								
								<tr>
									<th>Tanggal Update</th>
									<td><?php echo $hasil['tgl_update'];?></td>
								</tr>

						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
