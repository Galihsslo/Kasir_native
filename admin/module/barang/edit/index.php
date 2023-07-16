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
					  	
						<h3><strong>Edit Barang</strong></h3><hr>
						<a href="index.php?page=barang"><button class="btn btn-primary" style="border-radius: 0px"> Kembali </button></a><br><br>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Edit Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-striped">
							<form action="fungsi/edit/edit.php?barang=edit" method="POST">
								<tr>
									<th>ID Barang</th>
									<td><input type="text" readonly="readonly" class="form-control" value="<?php echo $hasil['id_barang'];?>" name="id"></td>
								</tr>
								<tr>
									<th>Kategori</th>
									<td>
									<select name="kategori" class="form-control">
										<option value="<?php echo $hasil['id_kategori'];?>"><?php echo $hasil['nama_kategori'];?></option>
										<option value="#">Pilih Kategori</option>
										<?php  $kat = $lihat -> kategori(); foreach($kat as $isi){ 	?>
										<option value="<?php echo $isi['id_kategori'];?>"><?php echo $isi['nama_kategori'];?></option>
										<?php }?>
									</select>
									</td>
								</tr>
									<tr>
									<th>Stok</th>
									<td><input type="number" class="form-control" value="<?php echo $hasil['stok'];?>" name="stok"></td>
								</tr>
								<tr>
									<th>Harga Beli</th>
									<td><input type="number" class="form-control" value="<?php echo $hasil['harga_beli'];?>" name="beli"></td>
								</tr>
								<tr>
									<th>Harga Jual</th>
									<td><input type="number" class="form-control" value="<?php echo $hasil['harga_jual'];?>" name="jual"></td>
								</tr>
								<tr>
									<th>Merk Barang</th>
									<td><input type="text" class="form-control" value="<?php echo $hasil['merk'];?>" name="merk"></td>
								</tr>
								<tr>
									<th>Nama Barang</th>
									<td><input type="text" class="form-control" value="<?php echo $hasil['nama_barang'];?>" name="nama"></td>
								</tr>
								
								
								<tr>
									<th>Satuan Barang</th>
									<td>
										<select name="satuan" class="form-control">
											<option value="<?php echo $hasil['satuan_barang'];?>"><?php echo $hasil['satuan_barang'];?></option>
											<option value="#">Pilih Satuan</option>
											<option value="PCS">PCS</option>
										</select>
									</td>
								</tr>
							
								<tr>
									<th>Tanggal Update</th>
									<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
								</tr>
								<tr>
									<td></td>
									<td><button class="btn btn-primary" style="border-radius: 0px"> Simpan</button></td>
								</tr>
							</form>
						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
