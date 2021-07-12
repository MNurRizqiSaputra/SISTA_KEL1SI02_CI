<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('include_admin/head'); ?>

<body>

<!-- PRELOADER -->
<img id="preloader" src="<?php echo base_url('public/images/sistanms.gif');?>" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">



	<!-- PAGE -->
	<div id="page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<img src="<?php echo base_url('public/images/sistalogo2.PNG">');?>"
						<a href="admin.html" ><span class="b1" >SISTA</span></a>
					</div><!-- //LOGO -->
					
					<?php $this->load->view('include_admin/nav');?>
					<!-- MENU -->
					
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->

         <!-- BREADCRUMBS -->
         <section class="breadcrumbs_block clearfix parallax">
            <div class="container center">
                <center><img src="<?php echo base_url('public/images/sistalogo2.PNG');?>" width="auto"></center><br>
                <h3 style="color: #ffffff;"><b>SISTEM INFORMASI SEMINAR TUGAS AKHIR</b></h3>
                <h2><b>SISTA</b></h2>	
            </div>
		</section><!-- //BREADCRUMBS -->

		<div class="container">
            <br>
              <p align="right" style="margin-right: 10%; color: rgb(205, 216, 46); font-size: 20px; font-weight: bold; background-color: black; width: 100%; line-height: 200%; border-radius: 20px; padding-right: 10px;"><a href="admin.html" align="right" style="color: rgb(0, 247, 255);">Home</a> > <a href="#" align="right" style="color: rgb(255, 255, 255);">Kelola Daftar Seminar</a></p>
            <br>
				<center><h1 style="margin-bottom: -50px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >KELOLA DAFTAR SEMINAR TA</h1></center>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
        <button type="button" class="btn btn-primary btn-lg" style="margin-left: 10%;"><a href="<?php echo base_url('index.php/seminar/add_new');?>"  style="color: #ffffff;"><i class="fas fa-plus-square"></i> TAMBAH</a></button>
        <br>
	<center>
		<div class="table-responsive">
		<table class="table" border="10" style="width:80%; margin-top: 2%;" >
      <thead style="background-image: linear-gradient(to right top, #4b12eb, #3511bf, #210d95, #11096c, #070146)">
        <tr>
          <th size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">No</th>
          <th size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">Nim</th>
          <th size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">Mahasiswa/i</th>
        </tr>
      </thead>
      <tbody class="table" style="text-align: center; font-size: 170%; font-weight: bold; background-image: linear-gradient(to right top, #961c1c, #9a1919, #9d1616, #a11313, #a40f0f); color: white;">
      <?php 
$count = 0;
foreach ($seminar->result() as $row):
$count++;
?>
          <tr>
          <td><?php echo $row->id;?></td>
          <td><?php echo $row->semester;?></td>
          <td><?php echo $row->tanggal;?></td>
          </tr>
          <?php
          endforeach;
?>
          
      </tbody>
	</table>
	</div>
</center>

<!-- CONTACTS -->
<section id="contacts">
	<!-- FOOTER -->
	<footer>
			
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- ROW -->
			
			<div class="row copyright">
				<div class="col-lg-12 text-center">
				
				 <p><i class="far fa-copyright"></i>  DIBUAT OLEH  KELOMPOK 1</p>
				 <marquee>(1) Muhammad Adli Azzam, (2) M Nur Rizqi Saputra, (3) Arif Satriyo Nur Alvian Purnama, (4) Reyhansyah </marquee>
				</div>
			
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
</section><!-- //CONTACTS -->
</div>
</body>
</html>