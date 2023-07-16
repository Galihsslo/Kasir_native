 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
<?php
	$id= $_GET['kategori'];
	$kategori = $lihat -> kategori_edit($id);
	
?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12">
						
						<h3><strong>Edit Data Kategori "<?php echo $kategori['nama_kategori'];?>"</strong></h3><hr>
						<a href="index.php?page=kategori"><button class="btn btn-primary" style="border-radius: 0px">Kembali </button></a><br><br>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Edit data berhasil !</p>
						</div>
						<?php }?>
						<form method="POST" action="fungsi/edit/edit.php?kategori=edit">
							<table>
								<tr>
									<p>Edit kategori barang kemudian klik button update <i class="glyphicon glyphicon-arrow-down"></i></p>
									<td><input type="hidden" class="form-control" value="<?php echo $kategori['id_kategori'];?>" name="id" placeholder="Masukan Kategori Barang Baru"></td>
									<td style="width:15pc;"><input type="text" class="form-control" value="<?php echo $kategori['nama_kategori'];?>" name="kategori" placeholder="Masukan Kategori Barang Baru"><br>
									<button id="tombol-simpan" class="btn btn-primary" style="border-radius: 0px"> Update Data</button></td>
								</tr>
							</table>
						</form>
						<br/>
						<table class="table table-bordered">
							<thead>
								<tr>
									<td>No.</td>
									<td>Kategori</td>
									<td>Tanggal Input</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td><?php echo $kategori['nama_kategori'];?></td>
									<td><?php echo $kategori['tgl_input'];?></td>
								</tr>
							</tbody>
						</table>
						<div class="clearfix" style="padding-top:25%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
