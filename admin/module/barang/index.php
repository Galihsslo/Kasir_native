 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <div class="bg-shadow" style="background:rgba(0,0,0,0.3);z-index:99999;position:fixed;width:100%;height:6000px;"></div>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12">
						<h3><strong>Data Barang</strong></h3><hr>
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
						<table>
							<tr>
								<td><button id="tombol-simpan" onclick="clickModals()" class="btn btn-primary" style="border-radius: 0px"><i class="fa fa-plus"></i> Tambah</button></td>
							</tr>
						</table>
						<br/>
						<!-- view barang -->	
						<div class="modal-view">
							<table class="table table-bordered" id="example1">
								<thead>
									<tr>
										<th>No.</th>
										<th>ID Barang</th>
										<th>Kategori</th>
										<th>Nama Barang</th>
										<th>Merk Barang</th>
										<th>Harga Jual</th>
										<th>Satuan Barang</th>
										<th>Stok</th>
										<th><center>Tindakan</center></th>
									</tr>
								</thead>
								<tbody>
								<?php 
									$hasil = $lihat -> barang();
									$no=1;
									foreach($hasil as $isi){
								?>
									<tr>
										<td><center><?php echo $no;?>.</center></td>
										<td><?php echo $isi['id_barang'];?></td>
										<td><?php echo $isi['nama_kategori'];?></td>
										<td><?php echo $isi['nama_barang'];?></td>
										<td><?php echo $isi['merk'];?></td>
										<td>Rp.<?php echo number_format($isi['harga_jual']);?>,-</td>
										<td> <?php echo $isi['satuan_barang'];?></td>
										<td><center>
											<?php if($isi['stok'] == '0'){?>
												<button class="btn btn-danger"> Habis</button>
											<?php }else{?>
												<?php echo $isi['stok'];?>
											<?php }?></center>
										</td>
										<td><center>
											
											<?php if($isi['stok'] <=  '3'){?>
												<form method="POST" action="fungsi/edit/edit.php?stok=edit">
													<input type="text" name="restok" class="form-control">
													<input type="hidden" name="id" value="<?php echo $isi['id_barang'];?>" class="form-control">
													<button class="btn btn-primary">
														Restok
													</button>
												</form>
											<?php }else{?>
											<a href="index.php?page=barang/details&barang=<?php echo $isi['id_barang'];?>"><button class="btn btn-primary" style="border-radius: 0px">Detail</button></a>&nbsp;
											<a href="index.php?page=barang/edit&barang=<?php echo $isi['id_barang'];?>"><button class="btn btn-warning" style="border-radius: 0px">Edit</button></a>&nbsp;
											<a href="fungsi/hapus/hapus.php?barang=hapus&id=<?php echo $isi['id_barang'];?>" onclick="javascript:return confirm('Hapus data barang ini selamanya?');"><button class="btn btn-danger" style="border-radius: 0px">Hapus</button></a>
											<?php }?>
										</center></td>
									</tr>
								<?php $no++; }?>
								</tbody>
							</table>
							<?php 
							$c = $lihat -> jml();
							?><br>
							<h4> Pengeluaran uang ( Modal ) : Rp.<?php echo number_format($c['byr']);?>,-</h4>
							<div class="clearfix" style="padding-top:27%;"></div>
						</div>
					<!-- end view barang -->
					<!-- tambah barang MODALS-->
					<div class="modal-create" style="z-index:9999999;position:absolute;margin:0 auto;padding:0;top:0;width:85%;">
						<div class="panel panel-default" style="border:0px;">
							<div class="panel-heading">
								<h4><i class="fa fa-user-plus"></i>  Tambah data
									<a class="pull-right">
										<button type="submit" class="btn btn-danger" style="border-radius: 0px" onclick="cancelModals()" id="batal">Batal</button>
									</a>
								</h4>
							</div>
							<div class="panel-body">
								<div class="box-content">
									<table class="table table-striped bordered">
										<form action="fungsi/tambah/tambah.php?barang=tambah" method="POST">
											
											<?php
												$format = $lihat -> barang_id();
											?>
											<tr>
												<td>ID Barang</td>
												<td><input type="text" readonly="readonly" value="<?php echo $format;?>" class="form-control"  name="id"></td>
											</tr>
											<tr>
												<td>Kategori</td>
												<td>
												<select name="kategori" class="form-control">
													<option value="#">Pilih Kategori</option>
													<?php  $kat = $lihat -> kategori(); foreach($kat as $isi){ 	?>
													<option value="<?php echo $isi['id_kategori'];?>"><?php echo $isi['nama_kategori'];?></option>
													<?php }?>
												</select>
												</td>
											</tr>
											<tr>
												<td>Stok</td>
												<td><input type="number" Placeholder="" class="form-control"  name="stok"></td>
											</tr>
											
											
											<tr>
												<td>Harga Beli</td>
												<td><input type="number" placeholder="" class="form-control" name="beli"></td>
											</tr>
											<tr>
												<td>Harga Jual</td>
												<td><input type="number" placeholder="" class="form-control"  name="jual"></td>
											</tr>
											<tr>
												<td>Merk Barang</td>
												<td><input type="text" placeholder="" class="form-control"  name="merk"></td>
											</tr>
											<tr>
												<td>Tanggal Input</td>
												<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
											</tr>
											<tr>
												<td>Nama Barang</td>
												<td><input type="text" placeholder="" class="form-control" name="nama"></td>
											</tr>
											
											
											<tr>
												<td>Satuan Barang</td>
												<td>
													<select name="satuan" class="form-control">
														<option value="#">Pilih Satuan</option>
														<option value="PCS">PCS</option>
													</select>
												</td>
											</tr>
											
											
											<tr>
												<td></td>
												<td><button class="btn btn-primary" style="border-radius: 0px"> Simpan</button></td>
											</tr>
										</form>
									</table>
								</div>
							</div>
						<!-- end tambah barang -->
					</div>
				  </div>
              </div>
          </section>
      </section>
	
