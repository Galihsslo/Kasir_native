 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12">
						<h3><strong>Data Laporan</strong>
							<a  style="padding-left:56pc;" href="fungsi/hapus/hapus.php?laporan=jual" onclick="javascript:return confirm('Data laporan akan dihapus selamanya?');">
								<button class="btn btn-primary" style="border-radius: 0px">Reset</button>
							</a>
						</h3><hr>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Data berhasil terhapus</p>
						</div>
						<?php }?>
						<!-- view barang -->	
						<div class="modal-view">
							<table class="table table-bordered" id="example1">
								<thead>
									<tr>
										<th><center> No.</center></th>
										<th> ID Barang</th>
										<th> Nama Barang</th>
										<th style="width:10%;"> Jumlah</th>
										<th style="width:20%;"> Total</th>
										<th> Kasir</th>
										<th> Tanggal Input</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; $hasil = $lihat -> jual();?>
									<?php foreach($hasil as $isi){;?>
									<tr>
										<td><center><?php echo $no;?>.</center></td>
										<td><?php echo $isi['id_barang'];?></td>
										<td><?php echo $isi['nama_barang'];?></td>
										<td><?php echo $isi['jumlah'];?> </td>
										<td>Rp.<?php echo number_format($isi['total']);?>,-</td>
										<td><?php echo $isi['nm_member'];?></td>
										<td><?php echo $isi['tanggal_input'];?></td>
									</tr>
									<?php $no++; }?>
								</tbody>
							</table><br>
							<h4>
								<?php $hasil = $lihat -> jumlah_nota(); ?>
								Pemasukan Saat Ini : Rp.<?php echo number_format($hasil['bayar']);?>,-
							</h4>
							<div class="clearfix" style="padding-top:27%;"></div>
						</div>
					</div>
				  </div>
              </div>
          </section>
      </section>
	

