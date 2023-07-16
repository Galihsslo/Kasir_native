 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12">
						<h3><strong>Data Kategori</strong></h3><hr>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Tambah data berhasil</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus data berhasil </p>
						</div>
						<?php }?>
						<form method="POST" action="fungsi/tambah/tambah.php?kategori=tambah">
							<table>
								<tr>
									<p>Masukan kategori barang baru kemudian klik button tambah <i class="glyphicon glyphicon-arrow-down"></i></p>
									<td style="width:25pc;"><input type="text" class="form-control" name="kategori"><br>
									<button id="tombol-simpan" class="btn btn-primary" style="border-radius: 0px"><i class="fa fa-plus"></i> Tambah</button></td>
								</tr>
							</table>
						</form>
						<br/>
						<table class="table table-bordered" id="example1">
							<thead>
								<tr>
									<th><center>No.</center></th>
									<th>Kategori</th>
									<th>Tanggal Input</th>
									<th><center>Tindakan</center></th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$hasil = $lihat -> kategori();
								$no=1;
								foreach($hasil as $isi){
							?>
								<tr>
									<td><center><?php echo $no;?>.</center></td>
									<td><?php echo $isi['nama_kategori'];?></td>
									<td><?php echo $isi['tgl_input'];?></td>
									<td><center>
										<a href="index.php?page=kategori/edit&kategori=<?php echo $isi['id_kategori'];?>"><button class="btn btn-warning" style="border-radius: 0px">Edit</button></a>&nbsp;
										<a href="fungsi/hapus/hapus.php?kategori=hapus&id=<?php echo $isi['id_kategori'];?>" onclick="javascript:return confirm('Hapus data kategori selamanya?');"><button class="btn btn-danger" style="border-radius: 0px">Hapus</button></a>
									</td>
								</center></tr>
							<?php $no++; }?>
							</tbody>
						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
