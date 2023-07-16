   
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
<?php 
  $id = $_SESSION['admin']['id_member'];
  $hasil_profil = $lihat -> member_edit($id);
?>
      <aside>
          <div id="sidebar"  class="nav-collapse " style="background: #1a2226">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar'];?>" class="img-circle" width="110" height="110"></a></p>
              	  <h5 class="centered"><?php echo $hasil_profil['nm_member'];?></h5>
              	  <h5 class="centered">( <?php echo $hasil_profil['NIK'];?> )</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                         <span class="glyphicon glyphicon-home"></span>
                          <span><font size="2px"><strong>Home</strong></font></span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <span class="glyphicon glyphicon-floppy-save"></span>
                          <span><font size="2px"><strong>Data Master <span style="padding-left:2px;"> </span></strong></font></span>
                      </a>
                      <ul class="sub">
                         
                          <li><a  href="index.php?page=kategori"><i class="glyphicon glyphicon-arrow-right"></i> Kategori</a></li>
                           <li><a  href="index.php?page=barang"><i class="glyphicon glyphicon-arrow-right"></i> Data Barang</a></li>
                          <li><a  href="index.php?page=user"><i class="glyphicon glyphicon-arrow-right"></i> Manajemen User</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                           <span class="glyphicon glyphicon-retweet"></span>
                          <span><font size="2px"><strong>Transaksi <span style="padding-left:2px;"></span></strong></font></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=jual"><i class="glyphicon glyphicon-arrow-right"></i> Transaksi Jual</a></li>
                          <li><a  href="index.php?page=laporan"><i class="glyphicon glyphicon-arrow-right"></i> Laporan Penjualan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                           <span class="glyphicon glyphicon-cog"></span>
                          <span><font size="2px"><strong>Pengaturan <span style="padding-left:2px;"> </span></strong></font></span>
                      </a>
                      <ul class="sub">
                          <li><a href="index.php?page=pengaturan"><i class="glyphicon glyphicon-arrow-right"></i> Pengaturan Toko</a></li>
                      </ul>
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <span class="glyphicon glyphicon-log-out"></span>
                          <span><font size="2px"><strong>Logout Aplikasi <span style="padding-left:2px;"> </span></strong></font></span>
                      </a>
                      <ul class="sub">
                          <li><a href="logout.php"><i class="glyphicon glyphicon-arrow-right"></i> Logout Aplikasi</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
