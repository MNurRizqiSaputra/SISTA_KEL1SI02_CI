<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('include_home_user/head'); ?>
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
					
				<!-- //MENU -->
                <!-- LOGO -->
					
                            <?php $this->load->view('include_user/nav');?>
			                <a href="<?= base_url()?>" ><span class="b1"  style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" >SISTA</span></a>
				  
                    </div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- BREADCRUMBS -->
        <?php $this->load->view('include_user/breadcumb');?>
        <!-- //BREADCRUMBS -->
        <br>
		<br>
		<style>
			fieldset {
				background-image: linear-gradient(to right top, #961c1c, #9a1919, #9d1616, #a11313, #a40f0f);
				color: rgb(255, 255, 255);
			  }
			  
			  legend {
				background-image: linear-gradient(to right top, #4b12eb, #3511bf, #210d95, #11096c, #070146);
				color: rgb(255, 255, 255);
				font-weight: bold;
				padding: 5px 10px;
			  }
			  
			  input {
				margin: 5px;
			  }
		  table{
			  margin-left: 1cm;
		  }
		  </style>
		 <!-- PORTFOLIO -->
		 <section id="portfolio">
			
			<!-- CONTAINER -->
			
			<div class="container">
				<p align="right" style="margin-right: 10%; color: rgb(205, 216, 46); font-size: 20px; font-weight: bold; background-color: black; width: 100%; line-height: 200%; border-radius: 20px; padding-right: 10px;"><a href="<?= base_url()?>" align="right" style="color: rgb(0, 247, 255);">Home</a> > <a href="<?= base_url('index.php/jadwal_seminar')?>" align="right" style="color: rgb(0, 247, 255);">Jadwal</a> > <a href="#" align="right" style="color: rgb(255, 255, 255);">Detail Jadwal</a></p>
				<br>
			<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">DETAIL SEMINAR</h1></center>
			<br>
			<hr>
			<form action="/action_page.php">
				<fieldset style="width:auto;margin:auto;">
				<legend style="font-size: 30px; height: auto; font-family: Arial, Helvetica, sans-serif; padding: 15px; text-align: center;">INFORMASI DETAIL</legend>
				<div class="table-responsive">
				<center><table class="table-responsive" border="10" width="80%">
					<thead style="background-image: linear-gradient(to right top, #4b12eb, #3511bf, #210d95, #11096c, #070146)">
						<tr>
						<th size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">KETERANGAN</th>
						<th size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">RESULT</th>
						</tr>
						</thead>
						<tbody class="table" style="text-align: center; font-size: 170%; font-weight: bold; background-image: linear-gradient(to right top, #961c1c, #9a1919, #9d1616, #a11313, #a40f0f); color: white;">
							<tr height="50px">						
								<td>ID</td>
								
								<td><?php echo $id?></td>
						
							</tr>
						
							<tr height="50px">						
								<td>SEMESTER</td>
								
								<td><?php echo $semester?></td>
								
							</tr>
						
							<tr height="50px">
								<td>TANGGAL</td>
								
								<td><?php echo $tanggal?></td>
						
							</tr>

							<tr height="50px">	
								<td>JAM</td>
								
								<td><?php echo $jam?></td></tr>
						
							</tr>

							<tr height="50px">						
								<td>KATEGORI SEMINAR</td>
								
								<td><?php echo $kategori_seminar_id?></td>
						
							</tr>

							<tr height="50px">						
								<td>NIM</td>
								
								<td><?php echo $nim?></td>
						
							</tr>

							<tr height="50px">						
								<td>NAMA</td>
								
								<td><?php echo $nama_mahasiswa?></td>
						
							</tr>

							<tr height="50px">	
								<td>JUDUL</td>	
								
								<td><?php echo $judul?></td>
						
							</tr>

							<tr height="50px">
								<td>DOSEN PEMBIMBING</td>
								
								<td><?php echo $pembimbing_id?></td>
						
							</tr>

							<tr height="50px">
								<td>DOSEN PENGUJI 1</td>
								
								<td><?php echo $penguji1_id?></td>
							</tr>

							<tr height="50px">
								<td>DOSEN PENGUJI 2</td>
								
								<td><?php echo $penguji2_id?></td>
							</tr>

							<tr height="50px">
								<td>RUANGAN</td>
								
								<td><?php echo $lokasi?></td>
							</tr>

							<tr height="50px">
								<td>NILAI PEMBIMBING</td>
								
								<td><?php echo $nilai_pembimbing?></td>
							</tr>

							<tr height="50px">
								<td>NILAI PENGUJI 1</td>
								
								<td><?php echo $nilai_penguji1?></td>
							</tr>

							<tr height="50px">
								<td>NILAI PENGUJI 2</td>
								
								<td><?php echo $nilai_penguji2?></td>
							</tr>

							<tr height="50px">
								<td>NILAI AKHIR</td>
								
								<td><?php echo $nilai_akhir?></td>
							</tr>
						
				
					</tbody>
				
				</table>
			</center>
			</div>
				<br>
					<center><button type="button"  class="btn btn-primary btn-lg" ><a href="<?= base_url()?>index.php/jadwal_seminar/" style="color: #ffffff;"><i class="fas fa-back"></i>KEMBALI</a></button></center>
			
				</fieldset>
				</form>
</div><!-- //CONTAINER -->
</section>

<!-- CONTACTS -->
<?php $this->load->view('include_home_user/footer'); ?>
<!-- //CONTACTS -->	
	</footer><!-- //FOOTER -->
</section><!-- //CONTACTS -->
</div>
</body>
</html>