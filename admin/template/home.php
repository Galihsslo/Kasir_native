 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9">
					<div class="row" style="margin-left:1pc;margin-right:1pc;">
				  <h3><strong>Dashboard</strong></h3>
				  <hr>
				   <?php 
						$sql=" select * from barang where stok <=3";
						$row = $config -> prepare($sql);
						$row -> execute();
						$q = $row -> fetch();
							if($q['stok'] == 3){	
							if($q['stok'] == 2){	
							if($q['stok'] == 1){	
								?>	
								<script>
									$(document).ready(function(){
										$('#pesan_sedia').css("color","red");
										$('#pesan_sedia').append("<span class='glyphicon glyphicon-asterisk'></span>");
									});
								</script>
								<?php
								echo "
								<br/>
								<div class='col-sm-12'>
									<div style='padding:5px;' class='alert alert-warning'>
										<span class='glyphicon glyphicon-info-sign'></span> Stok  <a style='color:red'>". $q['nama_barang']."</a> yang tersisa sudah kurang dari 3 . silahkan pesan lagi !!
										<span class='pull-right'><a href='index.php?page=barang'>Tabel Barang <i class='fa fa-arrow-right'></i></a></span>
									</div>
								</div>
								";	
							}}}
						?>
				  <?php $hasil_barang = $lihat -> barang_row();?>
				  <?php $hasil_kategori = $lihat -> kategori_row();?>
				  <?php $stok = $lihat -> barang_stok_row();?>
				  <?php $jual = $lihat -> jual_row();?>
                    <div class="row">
                      <!--STATUS PANELS -->
                      	<div class="col-md-3">
                      		<div class="panel panel-primary">
                      			<div class="panel-heading">
						  			<i class="glyphicon glyphicon-book"></i> DATA BARANG
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo $hasil_barang;?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;"><a href='index.php?page=barang'>Tabel Barang <i class='fa fa-arrow-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
                      <!-- STATUS PANELS -->
                      	<div class="col-md-3">
                      		<div class="panel panel-success">
                      			<div class="panel-heading">
						  			<i class="glyphicon glyphicon-book"></i> STOK BARANG
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo $stok['jml'];?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;"><a href='index.php?page=barang'>Tabel Barang <i class='fa fa-arrow-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
                      <!-- STATUS PANELS -->
                      	<div class="col-md-3">
                      		<div class="panel panel-info">
                      			<div class="panel-heading">
						  			<i class="glyphicon glyphicon-book"></i> TELAH TERJUAL
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo $jual['stok'];?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;"><a href='index.php?page=laporan'>Tabel laporan <i class='fa fa-arrow-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
                      	<div class="col-md-3">
                      		<div class="panel panel-danger">
                      			<div class="panel-heading">
						  			 <i class="glyphicon glyphicon-book"></i> KATEGORI BARANG
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo $hasil_kategori;?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;"><a href='index.php?page=kategori'>Tabel Kategori <i class='fa fa-arrow-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
						
                      	<?php $hasil = $lihat -> jumlah_nota(); ?><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<h4> Pemasukan uang : Rp.<?php echo number_format($hasil['bayar']);?>,-</h4>
						<?php  $c = $lihat -> jml(); ?>
						<h4> Pengeluaran uang ( Modal ) : Rp.<?php echo number_format($c['byr']);?>,-</h4>
					</div>
				</div>
           </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
			<div class="col-lg-3 ds">
				<div id="calendar" class="mb">
					<div class="panel green-panel no-margin">
						<div class="panel-body">
							<div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
								<div class="arrow"></div>
								<h3 class="popover-title" style="disadding: none;"></h3>
								<div id="date-popover-content" class="popover-content"></div>
							</div>
							<div id="my-calendar"></div>
						</div>
					</div>
				</div><!-- / calendar -->
			  </div><!-- /col-lg-3 -->
		  </div><! --/row -->
		 <div class="clearfix" style="padding-top:18%;"></div>
	  </section>
  </section>

