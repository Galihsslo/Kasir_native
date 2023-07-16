 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php 
		  $id = $_SESSION['admin']['id_member'];
		  $hasil = $lihat -> member_edit($id);
      ?>
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
						<h3><strong>Keranjang Penjualan</strong></h3><hr>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Data berhasil ditambahkan</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Data berhasil terhapus</p>
						</div>
						<?php }?>
						<div class="col-sm-5">
							<div class="panel panel-primary">
								<div class="panel-heading">
									Pencarian 
								</div>
								<div class="panel-body">
									<form method="POST">
										<input type="text" class="form-control" name="cari" placeholder="Masukan Nama Barang / Kode Barang">
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									 Hasil Pencarian
								</div>
								<div class="panel-body">
									<?php $cari = $_POST['cari']; $hasil = $lihat -> barang_cari($cari); ?>
									<table class="table table-stripped">
										<tr>
											<th>ID Barang</th>
											<th>Nama Barang</th>
											<th>Harga Barang</th>
											<th>Tindakan</th>
										</tr>
										<tr>
											<td><?php echo $hasil['id_barang'];?></td>
											<td><?php echo $hasil['nama_barang'];?></td>
											<td>Rp. <?php echo $hasil['harga_jual'];?></td>
											<form method="POST" action="fungsi/tambah/tambah.php?jual=jual">
												<input type="hidden" value="<?php echo $hasil['id_barang'];?>" name="id">
												<input type="hidden" value="<?php echo $_SESSION['admin']['id_member'];?>" name="kasir">
												<input type="hidden" value="<?php echo date("j F Y, G:i");?>" name="tgl">
												<td><button class="btn btn-primary" style="border-radius: 0px">Tambah</button></td>
											</form>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									 Kasir
									
									
								</div>
								<div class="panel-body">
									<a class="pull-right" href="fungsi/hapus/hapus.php?penjualan=jual">
										<button class="btn btn-info" style="border-radius: 0px">Reset</button>
									</a><br><br><br>
									<div id="keranjang">
										<table class="table table-bordered">
											<tr>
												<td><b>Tanggal</b></td>
												<td><input type="text" readonly="readonly" class="form-control" value="<?php echo date("j F Y, G:i");?>" name="tgl"></td>
											</tr>
										</table>
										<table class="table table-bordered" id="example1">
											<thead>
												<tr>
													<th> <center>No.</center></th>
													<th> Nama Barang</th>
													<th style="width:10%;"> Jumlah</th>
													<th style="width:20%;"> Total</th>
													<th> Kasir</th>
													<th> Tindakan</th>
												</tr>
											</thead>
											<tbody>
												<?php $no=1; $hasil = $lihat -> penjualan();?>
												<?php foreach($hasil as $isi){;?>
												<tr>
													<td><center><?php echo $no;?>.</center></td>
													<td><?php echo $isi['nama_barang'];?></td>
													<td>
														<form method="POST" action="fungsi/edit/edit.php?jual=jual">
															<input type="number" name="jumlah" value="<?php echo $isi['jumlah'];?>" class="form-control">
															<input type="hidden" name="id" value="<?php echo $isi['id_penjualan'];?>" class="form-control">
															<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang'];?>" class="form-control">
													</td>
													<td>Rp.<?php echo number_format($isi['total']);?>,-</td>
													<td><?php echo $isi['nm_member'];?></td>
													<td>
															<button class="btn btn-info" style="border-radius: 0px">Update</button>&nbsp;
														</form>
														<a href="fungsi/hapus/hapus.php?jual=jual&id=<?php echo $isi['id_penjualan'];?>&brg=<?php echo $isi['id_barang'];?>
														&jml=<?php echo $isi['jumlah']; ?>">
															<button class="btn btn-danger" style="border-radius: 0px">Hapus</button>
														</a>
													</td>
												</tr>
												<?php $no++; }?>
											</tbody>
									</table>
									<br/>
									<?php $hasil = $lihat -> jumlah(); ?>
									<div id="kasirnya">
										<table class="table table-stripped">
											<?php
												$total = $_POST['total'];
												$bayar = $_POST['bayar'];
												
												$hitung = $bayar - $total;
											?>
											<form method="POST" action="index.php?page=jual#kasirnya">
												<tr>
													<td>Total Semua  </td>
													<td><input type="text" class="form-control" name="total" value="<?php echo $hasil['bayar'];?>"></td>
												
													<td>Bayar  </td>
													<td><input type="text" class="form-control" name="bayar" value="<?php echo $bayar;?>"></td>
													<td><button class="btn btn-success" style="border-radius: 0px"> Bayar</button></td>
												</tr>
											</form>
											<tr>
												<td>Kembali</td>
												<td><input type="text" class="form-control" value="<?php echo $hitung;?>"></td>
												<td></td>
												<td>
													<a href="print.php?nm_member=<?php echo $_SESSION['admin']['nm_member'];?>
													&bayar=<?php echo $bayar;?>&kembali=<?php echo $hitung;?>" target="_blank">
													<button class="btn btn-primary" style="border-radius: 0px">
														 Cetak Bukti
													</button></a>
												</td>

											</tr>
										</table>
										<br/>
										<br/>
									</div>
								</div>
							</div>
						</div>
				  </div>
              </div>
          </section>
      </section>
	

